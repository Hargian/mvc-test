function showFile(e) {
    var files = e.target.files;
    for (var i = 0, f; f = files[i]; i++) {
        if (!f.type.match('image.*')) continue;
        var fr = new FileReader();
        fr.onload = (function() {
            return function(e) {
                var uplFile = "<img src='" + e.target.result + "' class='img-responsive' style='height:320px;width:240px;' alt='' />";
                document.getElementById('imageFile').innerHTML = uplFile;
            };
        })(f);

        fr.readAsDataURL(f);
    }
}

function getTableValue(input) {
    document.getElementById('table-'+input.id).innerHTML = input.value;
}

function showPreviwew(){
    document.getElementById('newTaskForm').style.display = 'none';
    var show = document.getElementById('showPreviewTable');
    show.style.display = '';
    return false;
}

function showForm() {
    document.getElementById('newTaskForm').style.display = '';
    document.getElementById('showPreviewTable').style.display = 'none';
    return false;
}

function checkFiles() {
    var file = document.getElementById('files').files[0];
        if (file.type!='image/jpg' && file.type!='image/png' && file.type!='image/jpeg'){
            document.getElementById('file-warning').style.display = '';
            return false;
        }

    return true;
}