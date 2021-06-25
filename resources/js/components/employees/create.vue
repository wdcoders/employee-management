<template lang="">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb be-main-breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <router-link to="/employees">Employees</router-link>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Add Employee
                </li>
            </ol>
        </nav>

        <div class="card be-content-inner">
            <h5 class="card-header be-content-header">Create Employee</h5>
            <div class="card-body be-content-body">
                <form @submit.prevent="createEmployee">
                    <div class="form-group row">
                        <label
                            for="first_name"
                            class="col-md-2 col-form-label text-md-right"
                            >First Name</label
                        >

                        <div class="col-md-3">
                            <input
                                id="first_name"
                                type="text"
                                class="form-control"
                                name="first_name"
                                required
                                autocomplete="first_name"
                                autofocus
                                v-model="form.first_name"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="middle_name"
                            class="col-md-2 col-form-label text-md-right"
                            >Middle Name</label
                        >

                        <div class="col-md-3">
                            <input
                                id="middle_name"
                                type="text"
                                class="form-control"
                                name="middle_name"
                                autocomplete="middle_name"
                                autofocus
                                v-model="form.middle_name"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="last_name"
                            class="col-md-2 col-form-label text-md-right"
                            >Last Name</label
                        >

                        <div class="col-md-3">
                            <input
                                id="last_name"
                                type="text"
                                class="form-control"
                                name="last_name"
                                required
                                autocomplete="last_name"
                                autofocus
                                v-model="form.last_name"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="department"
                            class="col-md-2 col-form-label text-md-right"
                            >Department</label
                        >

                        <div class="col-md-3">
                            <select
                                class="custom-select"
                                id="department"
                                name="department"
                                required
                                autocomplete="department"
                                autofocus
                                v-model="form.department_id"
                            >
                                <option selected>Select Department</option>
                                <option
                                    v-for="department in departments"
                                    :key="department.id"
                                    :value="department.id"
                                    >{{ department.name }}</option
                                >
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="address"
                            class="col-md-2 col-form-label text-md-right"
                            >Address</label
                        >

                        <div class="col-md-3">
                            <input
                                id="address"
                                type="text"
                                class="form-control"
                                name="address"
                                required
                                autocomplete="address"
                                autofocus
                                v-model="form.address"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="country_id"
                            class="col-md-2 col-form-label text-md-right"
                            >Country</label
                        >

                        <div class="col-md-3">
                            <select
                                class="custom-select"
                                id="country_id"
                                name="country_id"
                                required
                                autocomplete="country_id"
                                autofocus
                                @change="getStates"
                                v-model="form.country_id"
                            >
                                <option selected>Select Country</option>
                                <option
                                    v-for="country in countries"
                                    :key="country.id"
                                    :value="country.id"
                                    >{{ country.name }}</option
                                >
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="state_id"
                            class="col-md-2 col-form-label text-md-right"
                            >State</label
                        >

                        <div class="col-md-3">
                            <select
                                class="custom-select"
                                id="state_id"
                                name="state_id"
                                required
                                autocomplete="state_id"
                                autofocus
                                @change="getCity"
                                v-model="form.state_id"
                            >
                                <option selected>Select State</option>
                                <option
                                    v-for="state in states"
                                    :key="state.id"
                                    :value="state.id"
                                    >{{ state.name }}</option
                                >
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="city_id"
                            class="col-md-2 col-form-label text-md-right"
                            >City</label
                        >

                        <div class="col-md-3">
                            <select
                                class="custom-select"
                                id="city_id"
                                name="city_id"
                                required
                                autocomplete="city_id"
                                autofocus
                                v-model="form.city_id"
                            >
                                <option selected>Select City</option>
                                <option
                                    v-for="city in cities"
                                    :key="city.id"
                                    :value="city.id"
                                    >{{ city.name }}</option
                                >
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="zip_code"
                            class="col-md-2 col-form-label text-md-right"
                            >Zip Code</label
                        >

                        <div class="col-md-3">
                            <input
                                id="zip_code"
                                type="text"
                                class="form-control"
                                name="zip_code"
                                required
                                autocomplete="zip_code"
                                autofocus
                                v-model="form.zip_code"
                            />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="birthdate"
                            class="col-md-2 col-form-label text-md-right"
                            >Birthday</label
                        >
                        <div class="col-md-3">
                            <datepicker
                                name="birthdate"
                                id="birthdate"
                                input-class="form-control"
                                v-model="form.birthdate"
                            ></datepicker>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label
                            for="date_hired"
                            class="col-md-2 col-form-label text-md-right"
                            >Date of Joining</label
                        >
                        <div class="col-md-3">
                            <datepicker
                                name="date_hired"
                                id="date_hired"
                                input-class="form-control"
                                v-model="form.date_hired"
                            ></datepicker>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-3 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                Save Employee
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import Datepicker from "vuejs-datepicker";
import axios from "axios";
import moment from "moment";
export default {
    components: {
        Datepicker
    },
    data() {
        return {
            countries: [],
            states: [],
            cities: [],
            departments: [],
            form: {
                first_name: "",
                last_name: "",
                middle_name: "",
                address: "",
                department_id: "",
                country_id: "",
                state_id: "",
                city_id: "",
                zip_code: "",
                birthdate: null,
                date_hired: null
            }
        };
    },
    created() {
        this.getDepartments();
        this.getCountries();
    },
    methods: {
        getDepartments() {
            axios
                .get("/api/employees/departments")
                .then(res => {
                    this.departments = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getCountries() {
            axios
                .get("/api/employees/countries")
                .then(res => {
                    this.countries = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getStates() {
            axios
                .get(`/api/employees/${this.form.country_id}/states`)
                .then(res => {
                    this.states = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getCity() {
            axios
                .get(`/api/employees/${this.form.state_id}/cities`)
                .then(res => {
                    this.cities = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        createEmployee() {
            axios
                .post(`/api/employees`, {
                    first_name: this.form.first_name,
                    last_name: this.form.last_name,
                    middle_name: this.form.middle_name,
                    address: this.form.address,
                    department_id: this.form.department_id,
                    country_id: this.form.country_id,
                    state_id: this.form.state_id,
                    city_id: this.form.city_id,
                    zip_code: this.form.zip_code,
                    birthdate: this.formatDate(this.form.birthdate),
                    date_hired: this.formatDate(this.form.date_hired)
                })
                .then(res => {
                    console.log(res);
                    this.$router.push({ name: "EmployeesIndex" });
                })
                .catch(error => {
                    console.log(error);
                });
        },
        formatDate(d) {
            return moment().format("YYYY-MM-DD HH:mm:ss");
        }
    }
};
</script>
<style lang=""></style>
