import axios from "axios";

const axiosClient = axios.create({
  baseURL: "/api",
  headers: {
    Accept: "application/json",
    "Content-Type": "application/json",
  },
});
axios.interceptors.request.use(function (config) {
  config.headers.Authorization =
    "Bearer " + localStorage.getItem("access_token");
  return config;
});

export default axiosClient;
