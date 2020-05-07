<head>
    <link rel="stylesheet" href="/css/cabinetmaterialize/materialize.min.css">
</head>
<section>
    <!-- <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="comment-field"></div>
         </div>

        </div>
    </div> -->
    <div class="write-comment">
        <form>
            <div class="form-group">
                <label for="comment-name">Name:</label>
                <input type="text" class="form-control" id="comment-name" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label for="comment-body">Comment:</label>
                <textarea type="text" class="form-control" id="comment-body" name="comment"
                    placeholder="comment"></textarea>
            </div>
            <div class="form-group form-check text-right">
                <button type="submit" id="comment-add" data-id="${id}" class="btn  btn-primary">add Comment</button>
            </div>
        </form>
    </div>
    <div class="comment-field"></div>
    <!-- <div class="block-comment">
<p class="text-right small"><em>${data[id].date}</em></p>
<p class="alert alert-primary" role="alert">${data[id].name}</p>
<p class="alert alert-success" role="alert">${data[id].comment}</p>
</div> -->
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>