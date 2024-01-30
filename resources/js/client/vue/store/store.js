import { createStore } from "vuex";
import { state } from "./state.js";
import actions from "./actions";
import mutations from "./mutations.js";
import getters from "./getters.js";

export const store = createStore({
    state: () => state,
    actions,
    mutations,
    getters
})
