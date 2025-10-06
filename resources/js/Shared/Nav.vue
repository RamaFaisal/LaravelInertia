<template>
    <nav>
        <ul class="flex space-x-4 list-inside list-none">
            <li>
                <NavLink href="/" :active="$page.component === 'Welcome'"
                    >Home</NavLink
                >
            </li>
            <li>
                <NavLink
                    href="/users"
                    :active="$page.component === 'Users/Index'"
                    >Users</NavLink
                >
            </li>
            <li>
                <NavLink
                    href="/settings"
                    :active="$page.component === 'Settings'"
                    >Settings</NavLink
                >
            </li>
            <li>
                <NavLink href="/test" :active="$page.component === 'Test'"
                    >Test Page</NavLink
                >
            </li>
            <li>
                <NavLink href="{{ route('logout') }}" method="post">Log Out</NavLink>
            </li>
        </ul>
    </nav>
    <!-- <a href="/" :class="{ 'font-bold underline' : isActive === true }">Logout</a> -->
</template>

<script>
import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";
export default {
    components: {
        NavLink,
        Link,
    },
};
</script>
