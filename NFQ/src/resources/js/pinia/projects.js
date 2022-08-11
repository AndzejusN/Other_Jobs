import {defineStore} from 'pinia';

export const useProjectsList = defineStore('project', {
    state: () => ({
        project: []
    }),

    actions: {
        load($id) {
            let url = '/projects/' + $id;
            fetch(url).then(response => response.json()).then(data => {
                this.project = data.project;
            });
        }
    }
});
