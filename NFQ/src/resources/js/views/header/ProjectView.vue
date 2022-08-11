<script>
export default {
    name: "index",
};
</script>

<script setup>

import SpinnerView from '../../components/partials/SpinnerComponent';
import {ref, reactive} from "vue";

const state = reactive({
    projects: []
})

const name = ref('');
const groupsNr = ref(0);
const studentsNr = ref(0);

let spinner = ref(false);

function listProjects(url = 'v1/projects/') {
    spinner.value = true;
    fetch(url).then(response => response.json()).then(data => {
        state.projects = data.projects;
        spinner.value = false;
    });
}

function createProject() {
    spinner.value = true;

    let url = './v1/projects/create';
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            "name": name.value,
            "groups": groupsNr.value,
            "students": studentsNr.value
        })
    };

    fetch(url, requestOptions)
        .then(response => response.json())
        .then(data => {
            groupsNr.value = 0;
            studentsNr.value = 0;
            name.value = '';
            spinner.value = false;
            listProjects();
        });
}

function deleteProject(id) {
    let url = 'v1/projects/delete/';
    url += id;
    spinner.value = true;
    fetch(url).then(response => response.json()).then(data => {
        this.listProjects();
        spinner.value = false;
    });
}

listProjects();
</script>

<template>
    <SpinnerView v-if="spinner"/>

    <div class="col-8 d-flex flex-wrap mt-3 px-3">
        <div class="row input-group" style="display:inline-flex; width:auto;">
            <div class="card text-center" style="width: 37rem;">
                <div class="card-body">
                    <table class="student-table">
                        <thead>
                        <tr>
                            <th style="min-width: 10rem">Project name</th>
                            <th style="min-width: 10rem">Groups &numero;</th>
                            <th style="min-width: 10rem">Students &numero;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input v-model="name"></td>
                            <td><input v-model="groupsNr"></td>
                            <td><input v-model="studentsNr"></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-success btn-sm"
                                            @click="createProject">
                                        Add Project
                                    </button>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-8 d-flex flex-wrap mt-3 px-3">
        <div class="row input-group" style="display:inline-flex; width:auto;">
            <div class="card text-center" style="width: 50rem;">
                <div class="card-body">
                    <table class="student-table">
                        <thead>
                        <tr>
                            <th style="min-width: 16rem">Project name</th>
                            <th style="min-width: 10rem">Groups &numero;</th>
                            <th style="min-width: 10rem">Students &numero;</th>
                            <th style="min-width: 10rem">Action</th>

                        </tr>
                        </thead>
                        <tbody v-for="project in state.projects" :key="project.id">
                        <tr>
                            <td>{{ project.name }}</td>
                            <td>{{ project.groups }}</td>
                            <td>{{ project.students }}</td>
                            <td>

                                <RouterLink class="me-3 py-2 text-dark text-decoration-none" :to="{name: 'statusid', params: {id: project.id, students: project.students, groups: project.groups}}">
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    Go to project
                                </button>
                                </RouterLink>
                                <button type="button" class="btn btn-outline-danger btn-sm"
                                        @click="deleteProject(project.id)">Delete
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>
</style>
