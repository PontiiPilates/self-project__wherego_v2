<!DOCTYPE html>
<html lang="ru">

<head>
    <x-section_head>
        <x-slot name="title">Where-go</x-slot>
    </x-section_head>
</head>

<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="tools-bw-c">

            {{ $slot }}

        </div>
    </div>
</body>

</html>