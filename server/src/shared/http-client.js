import axios from 'axios';

/** Default config for axios instance */
let config = {
  baseURL: 'http://localhost/'
};

/** Creating the instance for axios */
const httpClient = axios.create(config);

export default httpClient;