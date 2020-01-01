<template>
  <modal
    name="new-project"
    classes="p-10 bg-gray-800 text-gray-100 rounded-lg shadow mr-auto"
    height="auto"
  >
    <h1 class="text-center text-4xl my-4">Add new habbit</h1>

    <form @submit.prevent="submit">
      <div class="flex">
        <div class="flex-1 ml-4">
          <div class="mb-4">
            <input
              type="text"
              name="title"
              id="title"
              class="border border-gray-300 p-2 text-sm bg-black block w-full rounded text-lg"
              :class="form.errors.title ? 'border-red-400' : 'border-gray-300'"
              placeholder="My new habbit"
              v-model="form.title"
            />
            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.title[0]"
            ></span>
          </div>
          <div class="mb-4">
            <select name="color" id="color" class="border border-gray-300 p-2 text-sm bg-black block w-full rounded text-lg" v-model="form.color" :class="form.errors.color ? 'border-red-400' : 'border-gray-300'">

              <option value="red">Red</option>
              <option value="blue">Blue</option>
              <option value="orange">Orange</option>
              <option value="yellow">Yellow</option>
              <option value="green">Green</option>
              <option value="teal">Teal</option>
              <option value="purple">Purple</option>
              <option value="pink">Pink</option>
            </select>

            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.title[0]"
            ></span>
          </div>
          <div class="mb-4">
            <textarea
              name="description"
              id="description"
              class="border border-gray-300 p-2 text-sm bg-black block w-full rounded text-lg"
              :class="form.errors.description ? 'border-red-400' : 'border-gray-300'"
              placeholder="Why the FUCK do you wanna do this shit?"
              rows="7"
              v-model="form.description"
            ></textarea>
            <span
              class="text-xs italic text-red-600"
              v-if="form.errors.title"
              v-text="form.errors.description[0]"
            ></span>
          </div>
        </div>
      </div>
      <footer class="flex justify-end">
        <button type="submit" class="button bg-green-600 w-1/2 p-4 text-xl">Add</button>

        <button
          type="button"
          class="button is-outlined ml-2 bg-red-600 w-1/2 p-4 text-xl"
          @click="$modal.hide('new-project')"
        >Cancel</button>
      </footer>
    </form>
  </modal>
</template>


<script>
import RevalForm from "./RevalForm";
export default {
  data() {
    return {
      form: new RevalForm({
        title: "",
        color: "",
        description: "",
        tasks: [{ body: "" }]
      })
    };
  },
  methods: {
    addTask() {
      this.form.tasks.push({ body: "" });
    },

    async submit() {
      if (!this.form.tasks[0].body) {
        delete this.form.originalData.tasks;
      }
      this.form
        .submit("/projects")
        .then(response => (location = response.data.message));
      // try {
      //   location = (await axios.post("/projects", this.form)).data.message;
      // } catch (error) {
      //   this.errors = error.response.data.errors;
      // }

      // let response = await axios
      //   .post("/projects", this.form)
      //   .then(response => {
      //     location = response.data.message;
      //   })
      //   .catch(error => {
      //     this.errors = error.response.data.errors;
      //   });
    }
  }
};
</script>
