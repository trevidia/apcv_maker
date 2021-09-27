(
    function () {
        let uploadBox = document.getElementById('uploader');
        let fileUploadInput = document.getElementById('select_file');
        let selectButton = document.getElementById('upload_button');
        let filename = document.getElementById('filename');
        let filenames = null;
        selectButton.addEventListener(
            'click', function () {
                fileUploadInput.click();

            }
        );
        uploadBox.addEventListener(
            'dragover',
            function (e) {
                e.preventDefault();
                uploadBox.classList.add('ondragover');
                console.log("hey");
            }
        );
        ['dragleave', "dragend"].forEach(type => {
            uploadBox.addEventListener(
                type, e => {
                    e.preventDefault();
                    uploadBox.classList.remove('ondragover');
                }
            )
        });
        uploadBox.addEventListener(
            'drop',
            function (e) {
                e.preventDefault();
                uploadBox.classList.remove('ondragover');
                fileUploadInput.files = e.dataTransfer.files;
                filenames = Array.from(fileUploadInput.files);
                filename.textContent = '';
                console.log(filename + "is filename");
                // console.log(filenames);
                filenames.map(function (e) {
                    filename = document.getElementById('filename');
                    let name = e.name + `, `;
                    filename.textContent += name;
                });
                // console.log(fileUploadInput.files)
            }
        );
        fileUploadInput.addEventListener(
            'change',
            function (e) {
                filename.innerText = fileUploadInput.value;
            }
        );
    }
)();