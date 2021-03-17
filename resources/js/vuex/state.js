let state = {
    showModal: false,
    errors: {
        // invalid_socio: []
    },
    atividades: [],
    dominios: {},
    clienteDefault: {
        cnpj: '',
        inscricao_estadual: '',
        id_atividade_comercial: '',
        nome_fantasia: '',
        razao_social: '',
        celular: '',
        email: '',
        email_confirmation: '',
        senha: '',
        senha_confirmation: '',
        cep: '',
        uf: '',
        cidade: '',
        bairro: '',
        id_tipo_logradouro: '',
        logradouro: '',
        numero: '',
        complemento: '',
    },
    cliente: {
        cnpj: '',
        inscricao_estadual: '',
        id_atividade_comercial: '',
        nome_fantasia: '',
        razao_social: '',
        celular: '',
        email: '',
        email_confirmation: '',
        senha: '',
        senha_confirmation: '',
        cep: '',
        uf: '',
        cidade: '',
        bairro: '',
        id_tipo_logradouro: '',
        logradouro: '',
        numero: '',
        complemento: '',
    },
    solicitacaoDefault: {
        tac: 5000,
        taxa_juros: 1199,
        valor_solicitado: 1000000,
        parcelas: 1,
        data_geracao_proposta: '',
        primeiro_vencimento: '',
        razao_social: '',
        cnpj: '',
        nome_fantasia: '',
        inscricao_estadual: '',
        rendimento_mensal: 100,
        id_atividade_comercial: '',
        tipo_empresa: '',
        cep: '',
        uf: '',
        cidade: '',
        bairro: '',
        tipo_logradouro: '',
        logradouro: '',
        numero: '',
        complemento: '',
        telefone: '',
        email: '',
        docs: [],
        doc_count: 0,
        nome_representante: "",
        cpf_representante: "",
        rg_representante: "",
        uf_rg_representante: "",
        nome_mae_representante: "",
        id_tipo_logradouro_representante: "",
        logradouro_representante: "",
        numero_representante: "",
        cep_representante: "",
        complemento_representante: "",
        bairro_representante: "",
        cidade_representante: "",
        uf_representante: "",
        celular_representante: "",
        email_representante: "",
        estado_civil_representante: "",
        profissao_representante: "",
        sexo_representante: "",
        representante_politicamente_exposto: "",
        representante_politicamente_exposto_cargo: "",
        parente_representante_politicamente_exposto: "",
        parente_representante_politicamente_exposto_cargo: "",
        socios: [],
        socio_count: 0,
        banco: "",
        forma_liberacao: "",
        agencia: "",
        digito_agencia: "",
        conta: "",
        digito_conta: "",
    },
    solicitacao: {
        tac: 5000,
        taxa_juros: 1199,
        valor_solicitado: 1000000,
        parcelas: 1,
        data_geracao_proposta: '',
        primeiro_vencimento: '',
        razao_social: '',
        cnpj: '',
        nome_fantasia: '',
        inscricao_estadual: '',
        rendimento_mensal: 100,
        id_atividade_comercial: '',
        tipo_empresa: '',
        cep: '',
        uf: '',
        cidade: '',
        bairro: '',
        tipo_logradouro: '',
        logradouro: '',
        numero: '',
        complemento: '',
        telefone: '',
        email: '',
        docs: [],
        doc_count: 0,
        nome_representante: "",
        cpf_representante: "",
        rg_representante: "",
        uf_rg_representante: "",
        nome_mae_representante: "",
        id_tipo_logradouro_representante: "",
        logradouro_representante: "",
        numero_representante: "",
        cep_representante: "",
        complemento_representante: "",
        bairro_representante: "",
        cidade_representante: "",
        uf_representante: "",
        celular_representante: "",
        email_representante: "",
        estado_civil_representante: "",
        profissao_representante: "",
        sexo_representante: "",
        representante_politicamente_exposto: "",
        representante_politicamente_exposto_cargo: "",
        parente_representante_politicamente_exposto: "",
        parente_representante_politicamente_exposto_cargo: "",
        socios: [],
        socio_count: 0,
        banco: "",
        forma_liberacao: "",
        agencia: "",
        digito_agencia: "",
        conta: "",
        digito_conta: "",
    },
}

export default state