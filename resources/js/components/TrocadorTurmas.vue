<template>
  <div>
    <div class="form-row">
      <div class="form-group col">
        <label for="departamento">Selecione o Departamento:</label>
        <select
          class="form-control"
          id="departamento"
          @change="loadDisciplinas"
        >
          <option
            v-for="departamento in departamentos"
            v-bind:key="departamento.id"
            :value="departamento.id"
          >{{ departamento.nome }}</option>
        </select>
      </div>
    </div>
    <div class="form-row" v-show="openDisciplinas">
      <div class="form-group col">
        <label for="disciplina_origem">Selecione a disciplina de origem:</label>
        <select class="form-control" id="disciplina_origem" @change="loadTurmas($event, 'origem')">
          <option
            v-for="disciplina in disciplinas"
            v-bind:key="disciplina.id"
            :value="disciplina.id"
          >{{ disciplina.nome }}</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="turma_origem">Turma:</label>
        <select
          class="form-control"
          id="turma_origem"
          name="turma_origem"
          @change="loadTurmas($event, 'origem')"
          :disabled="turmas_origem == ''"
        >
          <option
            v-for="turma in turmas_origem"
            v-bind:key="turma.id"
            :value="turma.id"
          >{{ turma.letra }}</option>
        </select>
      </div>
    </div>
    <div class="form-row" v-show="openDisciplinas">
      <div class="form-group col">
        <label for="disciplina_destino">Selecione a disciplina de destino:</label>
        <select
          class="form-control"
          id="disciplina_destino"
          @change="loadTurmas($event, 'destino')"
        >
          <option
            v-for="disciplina in disciplinas"
            v-bind:key="disciplina.id"
            :value="disciplina.id"
          >{{ disciplina.nome }}</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="turma_destino">Turma:</label>
        <select
          class="form-control"
          id="turma_destino"
          name="turma_destino"
          @change="loadTurmas($event, 'destino')"
          :disabled="turmas_destino == ''"
        >
          <option
            v-for="turma in turmas_destino"
            v-bind:key="turma.id"
            :value="turma.id"
          >{{ turma.letra }}</option>
        </select>
      </div>
    </div>
    <button type="submit" :disabled="(turmas_origem && turmas_destino) == ''" class="btn btn-lg btn-success float-right">Salvar Troca</button>
  </div>
</template>

<script>
export default {
  mounted() {
    axios.get("/api/departamentos").then(response => {
      this.departamentos = response.data;
    });
  },
  data: function() {
    return {
      departamentos: "",
      disciplinas: "",
      turmas_origem: "",
      turmas_destino: "",
      openDisciplinas: false
    };
  },
  methods: {
    loadDisciplinas(event) {
      axios
        .get(`/api/departamentos/${event.target.value}/disciplinas`)
        .then(response => {
          // console.log(response.data);
          this.disciplinas = response.data;
        })
        .catch(error => {
          console.log(error.response.data);
        });
      this.openDisciplinas = true;
    },
    loadTurmas(event, value) {
      axios
        .get(`/api/disciplinas/${event.target.value}/turmas`)
        .then(response => {
          // console.log(response.data);
          this[`turmas_${value}`] = response.data;
        })
        .catch(error => {
          console.log(error.response.data);
        });
    }
  }
};
</script>
