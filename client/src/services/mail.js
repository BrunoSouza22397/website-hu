import http from '../assets/client'

export default {
    sendMessage: (data) => {
        return http.post(`/send`, data).then(res => res.data)
    }
}