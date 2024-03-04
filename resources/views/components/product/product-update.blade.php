<div class="modal animated zoomIn" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
            </div>
            <div class="modal-body">
                <form id="update-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">


                                <label class="form-label mt-2">First Name</label>
                                <input type="text" class="form-control" id="UpdatefirstName">

                                <label class="form-label mt-2">Sure Name</label>
                                <input type="text" class="form-control" id="UpdatesureName">

                                <label class="form-label mt-2">Middle Name</label>
                                <input type="text" class="form-control" id="UpdatemiddleName">

                                <label class="form-label mt-2">Birth Date </label>
                                <input type="text" class="form-control" id="UpdatebirthDate">

                                <label class="form-label mt-2">Type </label>
                                <input type="text" class="form-control" id="Updatetype">

                                <label class="form-label mt-2">Duration </label>
                                <input type="text" class="form-control" id="Updateduration">

                                <label class="form-label mt-2">Entry Time </label>
                                <input type="date" class="form-control" id="UpdateentryTime">

                                <label class="form-label mt-2">Working Validity Period </label>
                                <input type="text" name="Updateperiod" value="01/01/2024 - 01/15/2024" id="Updateperiod" class="form-control" />

                                <label class="form-label mt-2">Application Status : </label>
                                <input type="text" class="form-control" id="UpdateappStatus">

                                <label class="form-label mt-2">Date of your application status is : </label>
                                <input type="text" class="form-control" id="UpdatestatusDate">

                                <label class="form-label mt-2">Reference Number </label>
                                <input type="text" class="form-control" id="UpdaterefNumber">

                                <label class="form-label mt-2">Country </label>
                                <input type="text" class="form-control" id="Updatecountry">

                                <label class="form-label mt-2">Dist : </label>
                                <input type="text" class="form-control" id="Updatedistrict">

                                <label class="form-label mt-2">Tel, number </label>
                                <input type="text" class="form-control" id="Updatenumber">

                                <label class="form-label mt-2">Issu date of : </label>
                                <input type="text" class="form-control" id="UpdateissuDate">

                                <label class="form-label mt-2">Expiration date of : </label>
                                <input type="text" class="form-control" id="UpdateexpDate">

                                <br />
                                <img class="w-15" id="oldImg" src="{{ asset('images/default.jpg') }}" />
                                <br />
                                <label class="form-label mt-2">Image</label>
                                <input oninput="oldImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="productImgUpdate">

                                <input type="text" class="d-none" id="updateID">
                                <input type="text" class="d-none" id="filePath">


                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button id="update-modal-close" class="btn bg-gradient-primary" data-bs-dismiss="modal"
                    aria-label="Close">Close</button>
                <button onclick="update()" id="update-btn" class="btn bg-gradient-success">Update</button>
            </div>

        </div>
    </div>
</div>


<script>
    async function FillUpUpdateForm(id, filePath) {

        document.getElementById('updateID').value = id;
        document.getElementById('filePath').value = filePath;
        document.getElementById('oldImg').src = filePath;


        showLoader();
        // await UpdateFillCategoryDropDown();

        let res = await axios.post("/product-by-id", {
            id: id
        })
        hideLoader();

        document.getElementById('UpdatefirstName').value = res.data['first_name'];
        document.getElementById('UpdatesureName').value = res.data['sure_name'];
        document.getElementById('UpdatemiddleName').value = res.data['middle_name'];
        document.getElementById('UpdatebirthDate').value = res.data['birth_date'];
        document.getElementById('Updatetype').value = res.data['type'];
        document.getElementById('Updateduration').value = res.data['duration'];
        document.getElementById('UpdateentryTime').value = res.data['entry_time'];
        document.getElementById('Updateperiod').value = res.data['period'];
        document.getElementById('UpdateappStatus').value=res.data['app_status'];
        document.getElementById('UpdatestatusDate').value=res.data['status_date'];
        document.getElementById('UpdaterefNumber').value=res.data['ref_number'];
        document.getElementById('Updatecountry').value=res.data['country'];
        document.getElementById('Updatedistrict').value=res.data['district'];
        document.getElementById('Updatenumber').value=res.data['number'];
        document.getElementById('UpdateissuDate').value=res.data['issu_date'];
        document.getElementById('UpdateexpDate').value=res.data['exp_date'];

        // document.getElementById('productPriceUpdate').value=res.data['price'];
        // document.getElementById('productUnitUpdate').value=res.data['unit'];
        // document.getElementById('productCategoryUpdate').value=res.data['category_id'];

    };



    async function update() {

        let UpdatefirstName = document.getElementById('UpdatefirstName').value;
        let UpdatesureName = document.getElementById('UpdatesureName').value;
        let UpdatemiddleName = document.getElementById('UpdatemiddleName').value;
        let UpdatebirthDate = document.getElementById('UpdatebirthDate').value;
        let Updatetype = document.getElementById('Updatetype').value;
        let Updateduration = document.getElementById('Updateduration').value;
        let UpdateentryTime = document.getElementById('UpdateentryTime').value;
        let Updateperiod = document.getElementById('Updateperiod').value;
        let UpdateappStatus = document.getElementById('UpdateappStatus').value;
        let UpdatestatusDate = document.getElementById('UpdatestatusDate').value;
        let UpdaterefNumber = document.getElementById('UpdaterefNumber').value;
        let Updatecountry = document.getElementById('Updatecountry').value;
        let Updatedistrict = document.getElementById('Updatedistrict').value;
        let Updatenumber = document.getElementById('Updatenumber').value;
        let UpdateissuDate = document.getElementById('UpdateissuDate').value;
        let UpdateexpDate = document.getElementById('UpdateexpDate').value;
        let updateID = document.getElementById('updateID').value;
        let filePath = document.getElementById('filePath').value;
        let productImgUpdate = document.getElementById('productImgUpdate').files[0];


        if (Updatecountry.length === 0) {
            errorToast("Product Category Required !")
        } else if (Updateduration.length === 0) {
            errorToast("Product Name Required !")
        } else if (UpdatebirthDate.length === 0) {
            errorToast("Product Price Required !")
        } else if (UpdateappStatus.length === 0) {
            errorToast("Product Unit Required !")
        } else {

            document.getElementById('update-modal-close').click();

            let formData = new FormData();
            formData.append('first_name', UpdatefirstName)
            formData.append('sure_name', UpdatesureName)
            formData.append('middle_name', UpdatemiddleName)
            formData.append('birth_date', UpdatebirthDate)
            formData.append('type', Updatetype)
            formData.append('duration', Updateduration)
            formData.append('entry_time', UpdateentryTime)
            formData.append('period', Updateperiod)
            formData.append('app_status', UpdateappStatus)
            formData.append('status_date', UpdatestatusDate)
            formData.append('ref_number', UpdaterefNumber)
            formData.append('country', Updatecountry)
            formData.append('district', Updatedistrict)
            formData.append('number', Updatenumber)
            formData.append('issu_date', UpdateissuDate)
            formData.append('exp_date', UpdateexpDate)
            formData.append('img', productImgUpdate)
            formData.append('id', updateID)
            formData.append('file_path', filePath)

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/update-product", formData, config)
            hideLoader();

            if (res.status === 200 && res.data === 1) {
                successToast('Request completed');
                document.getElementById("update-form").reset();
                await getList();
            } else {
                errorToast("Request fail !")
            }
        }
    }
</script>
