<div class="home-page-events">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                <div class="section-heading">
                    <h4 class="entry-title">No Rekening Donasi Swadaya Ummah</h4>
                    <p></p>
                 </div>

                 <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama Bank</th>
                        <th>No Rekening</th>
                        <th>Atas Nama</th>  
                    </thead>
                    <tbody>
                        <?php foreach($data as $value):?>
                        <tr>
                                <td><?= $value->id?></td>
                                <td><?= $value->nama?></td>
                                <td><?= $value->norek?></td>
                                <td>Swadaya Ummah</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                 </table>   
                </div>
            </div>
            </div>
        </div>
    </div>
</div>