<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card px-5 py-5">
                <div class="row justify-content-between ">
                    <div class="align-items-center col">
                        <h4>Product</h4>
                    </div>
                    <div class="align-items-center col">
                        <button data-bs-toggle="modal" data-bs-target="#create-modal"
                            class="float-end btn m-0  bg-gradient-primary">Create</button>
                    </div>
                </div>
                <hr class="bg-dark " />
                <table class="table" id="tableData">
                    <thead>
                        <tr class="bg-light">
                            <th>Image</th>
                            <th>Name</th>
                            <th>App Status</th>
                            <th>Type</th>
                            <th>Tel. Number</th>
                            <th>Issu Date</th>
                            <th>Expire Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableList">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    getList();


    async function getList() {


        showLoader();
        let res = await axios.get("/list-product");
        hideLoader();

        let tableList = $("#tableList");
        let tableData = $("#tableData");

        tableData.DataTable().destroy();
        tableList.empty();


        res.data.forEach(function(item, index) {
            let row = `<tr>
                    <td><img class="w-35 h-auto" alt="" src="${item['img_url']}"></td>
                    <td>${item['first_name']}</td>
                    <td>${item['app_status']}</td>
                    <td>${item['type']}</td>
                    <td>${item['number']}</td>
                    <td>${item['issu_date']}</td>
                    <td>${item['exp_date']}</td>
                    <td>
                        <a href="{{ url('/details') }}/${item['user_id']}" style="background: #333;
                            padding: 4px 8px; color: #fff;
                            border: 2px solid red;">
                        <i class="fa text-sm fa-eye"></i></a>

                        <button data-path="${item['img_url']}" data-id="${item['id']}" class="editBtn btn-success"><i class="fa text-sm fa-pen"></i></button>

                        <button data-path="${item['img_url']}" data-id="${item['id']}" class="deleteBtn btn-danger"><i class="fa text-sm  fa-trash-alt"></i></button>
                    </td>
                 </tr>`
            tableList.append(row)
        })

        $('.editBtn').on('click', async function() {
            let id = $(this).data('id');
            let filePath = $(this).data('path');
            await FillUpUpdateForm(id, filePath)
            $("#update-modal").modal('show');
        })

        $('.deleteBtn').on('click', function() {
            let id = $(this).data('id');
            let path = $(this).data('path');

            $("#delete-modal").modal('show');
            $("#deleteID").val(id);
            $("#deleteFilePath").val(path)

        })

        new DataTable('#tableData', {
            order: [
                [0, 'desc']
            ],
            lengthMenu: [5, 10, 15, 20, 30]
        });

    }
</script>
