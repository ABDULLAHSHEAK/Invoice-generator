<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Certificate </h5>
            </div>
            <div class="modal-body">
                <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                                <label class="form-label mt-2">First Name</label>
                                <input type="text" class="form-control" id="firstName">

                                <label class="form-label mt-2">Sure Name</label>
                                <input type="text" class="form-control" id="sureName">

                                <label class="form-label mt-2">Middle Name</label>
                                <input type="text" class="form-control" id="middleName">

                                <label class="form-label mt-2">Birth Date </label>
                                <input type="date" class="form-control" id="birthDate">

                                <label class="form-label mt-2">Type </label>
                                <input type="text" class="form-control" id="type">

                                <label class="form-label mt-2">Duration </label>
                                <input type="text" class="form-control" id="duration">

                                <label class="form-label mt-2">Entry Time </label>
                                <input type="text" class="form-control" id="entryTime">

                                <label class="form-label mt-2">Working Validity Period </label>
                                <input type="date" name="daterange" value="01/01/2024 - 01/15/2024" id="period" class="form-control" />

                                <label class="form-label mt-2">Application Status : </label>
                                <input type="text" class="form-control" id="appStatus">

                                <label class="form-label mt-2">Date of your application status is : </label>
                                <input type="date" class="form-control" id="statusDate">

                                <label class="form-label mt-2">Reference Number </label>
                                <input type="text" class="form-control" id="refNumber">

                                <label class="form-label mt-2">Country </label>
                                <input type="text" class="form-control" id="country">

                                <label class="form-label mt-2">Dist : </label>
                                <input type="text" class="form-control" id="district">

                                <label class="form-label mt-2">Tel, number </label>
                                <input type="text" class="form-control" id="number">

                                <label class="form-label mt-2">Issu date of : </label>
                                <input type="date" class="form-control" id="issuDate">

                                <label class="form-label mt-2">Expiration date of : </label>
                                <input type="date" class="form-control" id="expDate">

                                <br />
                                <img class="w-15" id="newImg" src="{{ asset('images/default.jpg') }}" />
                                <br />

                                <label class="form-label">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                                    class="form-control" id="Img">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="Save()" id="save-btn" class="btn bg-gradient-success">Save</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });



    async function Save() {

        let firstName = document.getElementById('firstName').value;
        let sureName = document.getElementById('sureName').value;
        let middleName = document.getElementById('middleName').value;
        let birthDate = document.getElementById('birthDate').value;
        let type = document.getElementById('type').value;
        let duration = document.getElementById('duration').value;
        let entryTime = document.getElementById('entryTime').value;
        let period = document.getElementById('period').value;
        let appStatus = document.getElementById('appStatus').value;
        let statusDate = document.getElementById('statusDate').value;
        let refNumber = document.getElementById('refNumber').value;
        let country = document.getElementById('country').value;
        let district = document.getElementById('district').value;
        let number = document.getElementById('number').value;
        let issuDate = document.getElementById('issuDate').value;
        let expDate = document.getElementById('expDate').value;
        let Img = document.getElementById('Img').files[0];

        if (firstName.length === 0) {
            errorToast("Product Category Required !")
        } else if (sureName.length === 0) {
            errorToast("Product Name Required !")
        } else if (issuDate.length === 0) {
            errorToast("Product Price Required !")
        } else if (number.length === 0) {
            errorToast("Product Unit Required !")
        } else if (!Img) {
            errorToast("Product Image Required !")
        } else {

            document.getElementById('modal-close').click();

            let formData = new FormData();
            formData.append('img', Img)
            formData.append('first_name', firstName)
            formData.append('sure_name', sureName)
            formData.append('middle_name', middleName)
            formData.append('birth_date', birthDate)
            formData.append('type', type)
            formData.append('duration', duration)
            formData.append('entry_time', entryTime)
            formData.append('period', period)
            formData.append('app_status', appStatus)
            formData.append('status_date', statusDate)
            formData.append('ref_number', refNumber)
            formData.append('country', country)
            formData.append('district', district)
            formData.append('number', number)
            formData.append('issu_date', issuDate)
            formData.append('exp_date', expDate)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/create-product", formData, config)
            hideLoader();

            if (res.status === 201) {
                successToast('Request completed');
                document.getElementById("save-form").reset();
                await getList();
            } else {
                errorToast("Request fail !")
            }
        }
    }
</script>
