<template>
  <modal name="new-project" classes="p-10 bg-white rounded-lg shadow mr-auto" height="auto">
    <h1 class="text-center text-xl my-4">یک پروژه‌ی جدید شروع کنید</h1>

    <form @submit.prevent="submit">
      <div class="flex">
        <div class="flex-1 ml-4">
          <div class="mb-4">
            <label for="title" class="text-sm block mb-2">تیتر</label>
            <input
              type="text"
              name="title"
              id="title"
              class="border border-gray-300 p-2 text-sm block w-full rounded"
              :class="errors.title ? 'border-red-400' : 'border-gray-300'"
              placeholder="پروژه‌ی جدید من"
              v-model="form.title"
            />
            <span class="text-xs italic text-red-600" v-if="errors.title" v-text="errors.title[0]"></span>
          </div>

          <div class="mb-4">
            <label for="description" class="text-sm block mb-2">تیتر</label>
            <textarea
              name="description"
              id="description"
              class="border border-gray-300 p-2 text-sm block w-full rounded"
              :class="errors.description ? 'border-red-400' : 'border-gray-300'"
              placeholder="پروژه‌ی جدید من"
              rows="7"
              v-model="form.description"
            ></textarea>
            <span
              class="text-xs italic text-red-600"
              v-if="errors.title"
              v-text="errors.description[0]"
            ></span>
          </div>
        </div>

        <div class="flex-1 mr-4">
          <div class="mb-4">
            <label class="text-sm block mb-2">کارهای مربوط به این پروژه</label>
            <input
              type="text"
              class="border border-gray-300 mb-2 p-2 text-sm block w-full rounded"
              placeholder="کار اول"
              v-for="task in form.tasks"
              v-model="task.body"
            />
          </div>

          <button type="button" class="inline-flex items-center text-xs" @click="addTask">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              class="ml-2"
            >
              <g fill="none" fill-rule="evenodd" opacity=".307">
                <path stroke="#000" stroke-opacity="0.012" stroke-width="0" d="M-3-3h24v24H-3z" />
                <path
                  fill="#000"
                  d="M9 0a9 9 0 0 0-9 9c0 4.97 4.02 9 9 9A9 9 0 0 0 9 0zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm1-11H8v3H5v2h3v3h2v-3h3V8h-3V5z"
                />
              </g>
            </svg>

            <span>افزودن یک وظیفه‌ی دیگر</span>
          </button>
        </div>
      </div>
      <footer class="flex justify-end">
        <button
          type="button"
          class="button is-outlined ml-2"
          @click="$modal.hide('new-project')"
        >رها کردن</button>

        <button type="submit" class="button">ساخت پروژه</button>
      </footer>
    </form>
  </modal>
</template>


<script>
export default {
  data() {
    return {
      form: {
        title: "",
        description: "",
        tasks: [{ body: "" }]
      },
      errors: {}
    };
  },
  methods: {
    addTask() {
      this.form.tasks.push({ body: "" });
    },

    async submit() {
      try {
        location = (await axios.post("/projects", this.form)).data.message;
      } catch (error) {
        this.errors = error.response.data.errors;
      }

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
