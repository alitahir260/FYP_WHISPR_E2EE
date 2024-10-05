<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    let inactivityTime = 20000000 * 1000; // 30 seconds
    let timeout;

    function resetTimer() {
        clearTimeout(timeout);
        timeout = setTimeout(logoutUser, inactivityTime);
    }

    function logoutUser() {
        // This will trigger if user is inactive for 30 seconds
        fetch("{{ route('profile.auth.ping') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            }
        }).then(response => {
            if (!response.ok) {
                window.location.href = "{{ route('profile.validate.pin') }}";
            }
        });
    }

    // Track user interactions to reset the timer
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeypress = resetTimer;
    document.onscroll = resetTimer;
</script>

