let actions = {
    createAtividade({ commit }, atividade) {
        return axios.post('http://localhost:8000/api/atividade_comercial', atividade)
            .then(res => {
                commit('CREATE_ATIVIDADE', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    fetchAtividades({ commit }) {
        return axios.get('http://localhost:8000/api/atividade_comercial')
            .then(res => {
                commit('FETCH_ATIVIDADES', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    updateAtividade({ commit }, atividade) {
        return axios.put(`http://localhost:8000/api/atividade_comercial/${atividade.id_atividade_comercial}`, { ...atividade })
            .then(res => {
                console.log(res);
                commit('UPDATE_ATIVIDADE', res.data)
            }).catch(err => {
                console.log(err)
            })
    },
    deleteAtividade({ commit }, atividade) {
        return axios.delete(`http://localhost:8000/api/atividade_comercial/${atividade.id_atividade_comercial}`)
            .then(res => {
                if (res.status === 200)
                    commit('DELETE_ATIVIDADE', atividade)
            }).catch(err => {
                console.log(err)
            })
    }
}

export default actions