import axios from 'axios';

/** Default config for axios instance */
let config = {
    baseURL: `http://${window.location.hostname}:3001/`,
    withCredentials: false,
    headers: {
        'Access-Control-Allow-Origin': '*',
        'Accept': 'application/json',
        'Content-type': 'application/json'
    },
};

/** Creating the instance for axios */
const httpClient = axios.create(config);

export default httpClient;