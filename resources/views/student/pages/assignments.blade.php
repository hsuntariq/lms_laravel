<x-layout>
    <x-header />

    <hr class="m-1">
    <main class="row">
        <section class="col-xl-2 col-lg-3">
            @include('student.partials.admin-sidebar')
        </section>
        <section class="col-xl-10 col-lg-9 p-3">
            <section class="d-flex align-items-center px-3 justify-content-between">
                <div class="d-flex">
                    <h2>Assignments</h2>
                </div>
                <ul class="list-unstyled text-capitalize d-flex gap-3 fw-medium">
                    <li style="color: #8338EB">All</li>
                    <li style="">pass</li>
                    <li style="">pass</li>
                    <li style="">pending</li>
                </ul>
            </section>
            <div class="table-responsive my-4">
                <table class="table text-center ">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Assignment Name</td>
                            <td>Max marks</td>
                            <td>End Time</td>
                            <td>Uplaod time</td>
                            <td>Upload</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td class="p-4">{{ $i + 1 }}</td>
                                <td class="p-4">Create a landing page</td>
                                <td class="p-4">10</td>
                                <td class="p-4">12 Sep 12.45am</td>
                                <td class="p-4">11 Sep 12.45am</td>
                                <td class="p-4">
                                    <input type="file" class="form-control">
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</x-layout>
