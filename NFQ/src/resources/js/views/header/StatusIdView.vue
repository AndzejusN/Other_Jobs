<script setup>

import SpinnerView from '../../components/partials/SpinnerComponent';
import {ref, reactive} from "vue";
import {useRoute} from "vue-router";

const route = useRoute();
const projectId = parseInt(route.params.id);
const groupsPerProject = parseInt(route.params.groups);
const studentsPerGroup = parseInt(route.params.students);

let spinner = ref(false);
let errorMessage = ref(null);
let confirmationMessage = ref(null);
const name = ref('');

const state = reactive({
    project: [],
    data: []
})

async function allData() {
    let url = 'http://localhost:8080/v2/students';

    let response = await axios.get(url);
    state.data = response.data.data;
}

function initData(projectId) {

    let url = 'http://localhost:8080/v1/projects/project/';
    url += projectId;

    spinner.value = true;
    fetch(url)
        .then(response => response.json())
        .then(data => {
            state.project = data.project;
            spinner.value = false;
        })
}

function createStudent() {
    confirmationMessage.value = null;
    errorMessage.value = null;
    spinner.value = true;

    let url = 'http://localhost:8080/v1/students/create';
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({"name": name.value})
    };

    fetch(url, requestOptions)
        .then(response => response.json())
        .then(data => {
            confirmationMessage.value = data.confirmation;
            errorMessage.value = data.error;
            allData();
            name.value = '';
            spinner.value = false;
        });
}

function deleteStudent(id) {
    let url = 'http://localhost:8080/v1/students/delete/';
    url += id;
    spinner.value = true;
    fetch(url).then(response => response.json()).then(data => {
        allData();
        spinner.value = false;
    });
}

function dataStudent(group, student) {
    let studentId = state.data.students[student.id];
    let groupId = state.data.students.group.id;
    let projectId = state.data.students.group.project.id;

    spinner.value = true;
    let url = 'http://localhost:8080/v1/students/modify';
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({"student_id": studentId, "group_id": groupId, "project_id": projectId})
    };

    fetch(url, requestOptions)
        .then(response => response.json())
        .then(() => {
            spinner.value = false;
        });

}

initData(projectId);
allData();

</script>

<template>

    <SpinnerView v-if="spinner"/>

    <div class="col-8 d-flex flex-wrap mt-3 px-3">
        <div class="row input-group" style="display:inline-flex; width:auto;">
            <div class="card text-center" style="width: 40rem;">
                <div class="card-body">
                    <table style="width:50%">
                        <tr>
                            <th style="text-align: start">Project name:</th>
                            <td>{{ state.project?.name ?? null }}</td>
                        </tr>
                        <tr>
                            <th style="text-align: start">Number of groups:</th>
                            <td>{{ state.project?.groups ?? null }}</td>
                        </tr>
                        <tr>
                            <th style="text-align: start">Students per group:</th>
                            <td>{{ state.project?.students ?? null }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-8 d-flex flex-wrap mt-3 px-3">
        <div class="row input-group" style="display:inline-flex; width:auto;">
            <div class="card text-center" style="width: 40rem;">
                <div class="card-body">
                    <table class="student-table">
                        <thead>
                        <tr>
                            <th style="min-width: 16rem">Student full name</th>
                            <th style="min-width: 10rem">Group</th>
                            <th style="min-width: 10rem">Action</th>
                        </tr>
                        </thead>
                        <tbody v-for="student in state.data.students" :key="student.id">
                        <tr>
                            <td>{{ student.name }}</td>
                            <td>Group #{{ student.group }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-danger btn-sm"
                                        @click="deleteStudent(student.id)">Delete
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td>
                                <input v-model="name">
                            </td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-outline-success btn-sm"
                                        @click="createStudent">
                                    Add Student
                                </button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="col-8 d-flex flex-wrap mt-3 mb-5 px-3" style="height: auto">-->
<!--        <div class="row input-group" style="display:inline-flex; width:auto;">-->
<!--            <div class="card text-center" style="width: 40rem; margin: 3px 0" v-for="group in groupsPerProject"-->
<!--                 :key="group.id">-->
<!--                <div class="card-body">-->
<!--                    <div>-->
<!--                        Group #{{ group }}-->
<!--                    </div>-->
<!--                    <div v-for="student in studentsPerGroup" :key="student">-->
<!--                        <br>-->
<!--                        <div style="width: 36rem;">-->
<!--                            <label class="form-label">Select a student Nr. {{ student }}:</label>-->
<!--                            <select v-model="state.data" class="form-control"-->
<!--                                    @change="dataStudent(group, student)">-->
<!--                                <option value="null" selected="selected" disabled="disabled">Select student by name-->
<!--                                </option>-->
<!--                                <option-->
<!--                                    v-for="(student, index) in state.data.students"-->
<!--                                    :value="index">-->
<!--                                    {{ student.name }}-->
<!--                                </option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</template>

<style scoped>

</style>
