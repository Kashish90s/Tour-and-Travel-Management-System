<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Admin/Add.css') }}">
    <title>Add Packages</title>
</head>

<body>
    <div class="main">
        <h1 class="align-heading"> Add Packages </h1>
        <div class="Package">
            <button class="btn" id="Btn"><span>
                    <ion-icon name="add-circle-outline"></ion-icon> Add new Package
                </span>
                <div id="modal" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('addPackages') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Packages</h4>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Package Name<input id="packagename" type="text" name="packagename"
                                                    class="form-control" required></label>
                                            <label>Destination<input id="destination" type="text" name="destination"
                                                    class="form-control" required></label>
                                            <label>Pricing<input id="pricing" type="text" name="pricing"
                                                    class="form-control" required></label>
                                            <label>Description<input id="description" type="text" name="description"
                                                    class="form-control" required></label>
                                            <label>Ratings<input id="rating" type="text" name="rating"
                                                    class="form-control" required></label>
                                            <label>Discounts<input id="discount" type="text" name="discount"
                                                    class="form-control" required></label>
                                            <label for="image-upload">Upload Image:</label>
                                            <input type="file" id="image-upload" name="picture_link"><br><br>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" value="Save">
                                        {{-- <input type="button" class="btn btn-default" data-dismiss="modal"
                                            value="Cancel"> --}}
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </button>

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Package Name</td>
                            <td>Destination</td>
                            <td>Pricing</td>
                            <td>Description</td>
                            <td>Ratings</td>
                            <td>Discounts</td>
                            <!-- <td>Add image</td> -->
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $d['package_name'] }} </td>
                                <td> {{ $d['destination'] }} </td>
                                <td> {{ $d['pricing'] }} </td>
                                <td> {{ $d['description'] }} </td>
                                <td> {{ $d['ratings'] }} </td>
                                <td> {{ $d['discount'] }} </td>
                                {{-- <td> {{ $data['package_name'] }} </td> --}}

                                <td>
                                    <a class="edit edit_btn" href="{{ route('editPackage', ['id' => $d['id']]) }}">
                                        <ion-icon name="cloud-upload-outline"></ion-icon>Edit
                                    </a>
                                    <a class="delete" href="{{ route('deletePackage', ['id' => $d['id']]) }}">
                                        <ion-icon name="trash-outline"></ion-icon>Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('Admin/Add.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
