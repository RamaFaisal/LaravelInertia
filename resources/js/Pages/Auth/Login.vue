<script setup>
import { Head, useForm } from "@inertiajs/vue3";

let form = useForm({
    email: "",
    password: "",
});

function submit() {
    form.post("/login");
}
</script>

<template>
    <Head title="Login" />
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">
                Sign In
            </h2>

            <form class="space-y-4" @submit.prevent="submit">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Email</label
                    >
                    <input
                        type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="your@email.com"
                        v-model="form.email"
                    />
                    <p
                        v-if="form.errors.email"
                        class="text-red-500 text-xs mt-1"
                    >
                        {{ form.errors.email }}
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1"
                        >Password</label
                    >
                    <input
                        type="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="••••••••"
                        v-model="form.password"
                    />
                    <p
                        v-if="form.errors.password"
                        class="text-red-500 text-xs mt-1"
                    >
                        {{ form.errors.password }}
                    </p>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input
                            type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                        />
                        <span class="ml-2 text-sm text-gray-600"
                            >Remember me</span
                        >
                    </label>
                    <a
                        href="#"
                        class="text-sm text-indigo-600 hover:text-indigo-500"
                        >Forgot password?</a
                    >
                </div>

                <button
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors"
                    :disabled="form.processing"
                >
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a
                    href="#"
                    class="text-indigo-600 hover:text-indigo-500 font-medium"
                    >Sign up</a
                >
            </div>
        </div>
    </div>
</template>
