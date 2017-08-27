<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
{{--<script src="{{ asset('js/dataTables.semanticui.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/semantic.min.js') }}"></script>--}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#user').DataTable();
    });
</script>


@if (session('agent')|| $errors->agent_id->first('agent_id'))
    <script>
        $(document).ready(function () {
            $('#add_agent').modal('show')
        });
    </script>
@endif

@if (session('admin')|| $errors->email->first('email'))
    <script>
        $(document).ready(function () {
            $('#add_admin').modal('show')
        });
    </script>
@endif

