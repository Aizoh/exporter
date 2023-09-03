
<x-quiz>
    {{-- @include('partials._export')  --}}
        <div class="row">
            {{-- @include('partials._export')  --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="quiztable">
                                <thead class="text-darken">
                                    <tr>
                                        <th style="width:5%">#Quiz ID</th>
                                        <th>Title</th>
                                        <th>Course</th>
                                        <th>Questions</th>
                                        <th>Available</th>
                                        <th>Status</th>
                                        <th class="text-right not-export-col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quizzes as $quiz)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $quiz->title }}</td>
                                            <td>{{ $quiz->course}}</td>
                                            <td>{{ $quiz->questions}}</td>
                                            <td>{{ $quiz->available }}</td>
                                            <td>
                                                <span class="badge badge-{{ ($quiz->status =='active') ? 'success' : (($quiz->status == 'inactive') ? 'info' : 'warning')}}">{{ $quiz->status }}</span>
                                            </td>
                                            <td class="text-right">
                                                <a class="btn-icon btn-darken" href="question/create/{{ $quiz->id }}" title="Add Question">
                                                    <i class="material-icons">question_answer</i>
                                                </a>
                                                <a class="btn-icon btn-darken" href="{{ route('quiz.show', $quiz->id) }}" title="View Quiz Report">
                                                    <i class="material-icons">insert_chart</i>
                                                </a>
                                                <a class="btn-icon btn-darken" href="{{ route('quiz.edit', $quiz->id) }}" title="Edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a class="deletebtn btn-icon btn-darken" data-action="{{ route('quiz.destroy', $quiz->id) }}" href="#" title="Delete">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- exclude the action button from exported. add the class not-exported-col to it --}}
        <script>
            $(document).ready(function() {
                $('#quiztable').DataTable({
                    dom: "Blfrtip",
                    buttons: [
                        {
                            text: 'csv',
                            extend: 'csvHtml5',
                            exportOptions: {
                                columns: ':visible:not(.not-export-col)'
                            }
                        },
                        {
                            text: 'excel',
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible:not(.not-export-col)'
                            }
                        },
                        {
                            text: 'pdf',
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: ':visible:not(.not-export-col)'
                            }
                        },
                        {
                            text: 'print',
                            extend: 'print',
                            exportOptions: {
                                columns: ':visible:not(.not-export-col)'
                            }
                        },
                        
                    ],
                    columnDefs: [{
                        orderable: false,
                        targets: -1
                    }] 
                });

                // checking dropdown actions
                // $("ul li ul li").click(function() {
                //     var i = $(this).index() + 1
                //     var table = $('#quiztable').DataTable();
                //     if (i == 1) {
                //         table.button('.buttons-csv').trigger();
                //     } else if (i == 2) {
                //         table.button('.buttons-excel').trigger();
                //     } else if (i == 3) {
                //         table.button('.buttons-pdf').trigger();
                //     } else if (i == 4) {
                //         table.button('.buttons-print').trigger();
                //     } 
                // });
            });
        </script>

    </x-quiz>
