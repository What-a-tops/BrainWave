<div class="container-content100">
    <div class="wrap-content100 p-l-50 p-r-50 p-t-20 p-b-33 shadow-lg">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Questions</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active p-t-10" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card text-center">
                    <div class="card-body brand-color text-white">
                        <h1 class="card-title active-users">0</h1>
                        <p class="card-text text-white">No of active Users.</p>
                        <div class="p-t-10">
                            <button type="submit" class="btn text-white btn-lg btn-outline-secondary start-game">
                                Start Game
                            </button
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade p-t-10" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="col-12">

                </div>
                <div class="col-12 table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?= view('layout/footer'); ?>
<script src="assets/scripts/admin.js"></script>

