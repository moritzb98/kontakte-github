@extends('layouts.app')

@section('content')
            <div class="card" style="margin-top: 20px;">

                <div class="card-header">Ajax Request Beispiel ohne Sinn</div>
                <div class="card-body">
                    <form >



                        <div class="form-group">

                            <label>Gebe irgendwas ein, dient nur als Beispielinput und wird nicht benutzt</label>

                            <input type="text" name="name" class="form-control" placeholder="Ich bin ein Beispiel" required="">

                        </div>
                        <div class="form-group">

                            <button class="btn btn-success btn-submit">ajax-Request starten</button>

                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        <script type="text/javascript">

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

        

            $(".btn-submit").click(function(e){

                e.preventDefault();

                var name = $("input[name=name]").val();

                $.ajax({

                type:'POST',

                url:'http://localhost:8888/kontakte-github/kontakte/public/ajaxRequest',

                data:{name:name},

                success:function(data){

                    alert(data.success);

                }

                });

            });

        </script>
@endsection