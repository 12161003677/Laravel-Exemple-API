<template>
  <transition name="fade">
    <side-bar class="h-screen">
      <div
        class="flex-col lg:w-11/12 md:w-9/12 w-8/12 m-auto my-10 justify-items-center"
      >
        <h1 class="text-xl text-gray-600 font-bold">Minhas Solicitações</h1>
        <div class="flex flex-col mt-3">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
              class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
            >
              <div
                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
              >
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        <input
                          type="checkbox"
                          name="checked"
                          class="text-teal-600"
                          id="checked"
                        />
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Data Solicitação
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Hora
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        N° Proposta
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        N° Contrato
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        N° Parc.
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Valor
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        1° Vencimento
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Contrato
                      </th>
                      <th
                        scope="col"
                        class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                      >
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-yellow-500"
                        >
                          Aguardando Análise
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-yellow-500"
                        >
                          Aguardando Análise
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                        >
                          Negado
                        </span>
                      </td>
                    </tr>

                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-500"
                        >
                          Aprovado
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-500"
                        >
                          Aprovado
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <input
                            type="checkbox"
                            name=""
                            id=""
                            class="text-teal-600"
                          />
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12/12/2020</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">
                          <span>12:00</span>
                        </div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        <div class="flex items-center">547841528</div>
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        547841528
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        5
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        R$12.000
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        12/12/2021
                      </td>
                      <td
                        class="px-4 py-4 whitespace-nowrap text-sm text-gray-500"
                      >
                        Contrato
                      </td>
                      <td class="px-4 py-4 whitespace-nowrap">
                        <span
                          class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-500"
                        >
                          Aprovado
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <router-link :to="{ name: 'solicitacao' }">
          <button
            class="text-base focus:outline-none mt-2 px-4 py-2 rounded font-bold cursor-pointer w-full hover:bg-teal-700 bg-teal-600 text-white border duration-200 ease-in-out border-teal-600 transition"
          >
            Nova solicitacao
          </button>
        </router-link>
      </div>
    </side-bar>
  </transition>
</template>
<script>
import SideBar from "./SideBar";
export default {
  components: {
    SideBar,
  },
  props: ["successPopUp"],
  beforeCreate: function () {
    document.body.className = "home";
  },
  created() {
    axios.defaults.headers.common["Authorization"] =
      "Bearer " + localStorage.getItem("access_token");
  },
  mounted() {
    this.cadastroPropostaModal();
  },
  methods: {
    cadastroPropostaModal() {
      if (this.successPopUp)
        this.$swal({
          title: "Proposta gerada com sucesso.",
          icon: "success",
          showConfirmButton: false,
          timer: 1500,
        });
    },
  },
};
</script>
<style>
.home {
  -webkit-font-smoothing: antialiased;
  background-image: none;
  background-color: #cecece;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
