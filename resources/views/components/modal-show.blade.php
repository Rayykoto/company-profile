<div class="modal fade" id="DataEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="event_name"></div>
            </div>
                 
            <div class="container">

                <div id="event_name"></div>

                <div id="event_image"></div>

                <div id="event_start"></div>

                <div id="event_desc"></div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#DataEvent').on('show.bs.modal', function (e) {

            // get information to update quickly to modal view as loading begins
            var opener = e.relatedTarget; //this holds the element who called the modal
            //we get details from attributes
            var event_name = $(opener).attr('event_name');
            var event_image = $(opener).attr('event_image');
            var event_start = $(opener).attr('event_start');
            var event_desc = $(opener).attr('event_description');
            document.getElementById("event_name").innerHTML = '<h3 style="color:blue;">' + event_name +
                '</h3>';
            document.getElementById("event_image").innerHTML = '<img src="' + event_image +
                '" class="img-thumbnail" style="height:300px; width:100%;">';
            document.getElementById("event_start").innerHTML = '<label class="pt-3">Start Date : ' +
                event_start + '</label>';
            document.getElementById("event_desc").innerHTML = '<p>' + event_desc + '</p>';
        });
    });

</script>
