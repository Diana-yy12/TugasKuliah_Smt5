<?php 
    if($this->session->flashdata('pesan') == 1){
    echo "<script>alert('Data berhasil di input')</script>";
    }
 ?>
<!-- Section0 Area Start -->
        <section id="section0" class="slider-area"> 
            <div class="main-slider owl-theme owl-carousel"> 
                <!-- Start Slingle Slide -->
                <div class="single-slide item" style="background-image: url(<?php echo base_url() ?>assets/img/etc/slider2.jpg); background-position: center; background-size: cover;">


                    <!-- <img src="img/slider/placehold.png"> -->

                    <!-- Start Slider Content -->

                        <div class="slider-content-area">  
                                <div class="row">
                                        <div class="slide-content-wrapper text-center">
                                            <div class="slide-content">
                                                <img class="classic" src="<?php echo base_url() ?>assets/img/logo/cemrebakerylogo.png">
                                                <h2>ADIRA Bakery</h2>
                                                <p>Nikmatilah Roti Lembut yang memiliki beragam varian rasa, enak, nyaman diperut.</p>

                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_data">Tambah Data Pelanggan</button>
                                                <img class="classic" src="<?php echo base_url() ?>assets/img/new/icon.png">

                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <!-- Start Slider Content -->
                </div>
                <!-- End Single Slide -->
             </div>
        </section>
        <!-- Section0 Area End -->

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('order/tambah_data'); ?>" method="POST">
            <table class="table">
                <thead>
                    <th>Nama Menu</th>
                    <th>Jumlah Pesanan</th>
                    <th>Aksi</th>
                </thead>

                <tbody class="form_tambah_data">
                    
                    <tr>
                        <td>
                            <select class="form-control" name="id_menu[]">
                                <option value="">---Pilih Menu---</option>
                                <?php $data = $this->db->get('menu')->result(); foreach($data as $dt): ?> 
                                <option value="<?php echo $dt->id_menu; ?>"><?php echo $dt->nama_menu; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </td>
                        
                        <td>
                            <input class="form-control" type="number" name="qty[]">
                        </td>

                        <td>
                            <button class="btn btn-primary addform" type="button">Tambah</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
</form>

<div class="container" id="tambah_data">
        <form method="post" action="<?php echo base_url('order/tambah_data') ?>" enctype="multipart">

            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Jumlah Pesanan</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                    <?php $i = 1; foreach ($order as $rows):
                        
                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $rows->nama_menu; ?></td>
                        <td><?php echo $rows->qty; ?></td>
                        <td>
                            <button class="btn btn-sm btn-warning" id="btn_edit" value="<?php echo $rows->id_order ?>">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="submit" class="btn btn-sm btn-danger" id="btn_hapus" value="<?php echo $rows->id_order ?>">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            </table>
            
        </form>
    
</div>

        <!-- Modal -->
        <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" id="form_edit">
                    
                    <div class="form-group">
                        <label>Menu</label>
                        <input type="hidden" name="id_order">
                        <select class="form-control" name="id_menu_edit">
                            <option value="">---Pilih Menu---</option>
                                <?php $data = $this->db->get('menu')->result(); foreach($data as $dt): ?> 
                                <option value="<?php echo $dt->id_menu; ?>"><?php echo $dt->nama_menu; ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Pesanan</label>
                        <input class="form-control" type="number" name="qty_edit">
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_update">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->

        
        <!-- Address Section Start -->
        <section id="section7" class="row address parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/img/etc/logo_depan.jpg">
            <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-5 col-md-offset-1 addess-description">
                            <span>ADIRA Bakery Location</span>
                            <h2>ADIRA Bakery Address</h2>
                            <p>Jika ada yang kurang dipahami, bisa menguhubungi kontak dibawah ini:</p>
                            <ul>
                                <li class="address-section">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                            Admin 1: Diana Fitri<br>Admin 2: Lathifah Dini
                                        </div>
                                    </div>
                                </li>
                                <li class="address-section">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <i class="fa fa-phone"></i>                                       
                                         </div>
                                         <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                            Admin 1: 123-456-7<br>Admin 2: 789-101-2
                                        </div>
                                    </div>
                                    </li>
                                <li class="address-section">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <i class="fa fa-envelope"></i>                                       
                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                            Admin 1: anaidf@rocketmail.com<br>Second: rahdini@protonmail.com
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 addess-map">
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5876112967138!2d106.93166482919261!3d-6.217432216502081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ca10d781341%3A0x6c604f423bff3bca!2sRT.3%2FRW.1%2C%20Malaka%20Jaya%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1641437400663!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
            </div>
        </div>
        </section>

        <!-- Adress Section End -->

<script type="text/javascript">
    $(document).ready(function(){

        $('.addform').click(function(e){
            e.preventDefault(e);
            $('.form_tambah_data').append(`
                <tr>
                <td>
                    <select class="form-control" name="id_menu[]">
                    <option value="">---Pilih Menu---</option>
                        <?php $data = $this->db->get('menu')->result(); foreach($data as $dt): ?> 
                        <option value="<?php echo $dt->id_menu; ?>"><?php echo $dt->nama_menu; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
                
                <td>
                    <input class="form-control" type="number" name="qty[]">
                </td>

                <td>
                    <button class="btn btn-danger btn_delform" type="button">Hapus</button>
                </td>
            </tr>`);
        });
        $(document).on('click', '.btn_delform', function(e){
            e.preventDefault(e);
            $(this).parents('tr').remove();
        });

        $(document).on('click', '#btn_edit', function(e){
            e.preventDefault(e);
            var edit_id=$(this).attr("value");
            $.ajax({
                url:'<?php echo base_url('order/show_edit'); ?>', 
                type:'post',
                dataType:'json',
                data:{id_order:edit_id},
                success: function(data){
                    $('[name="id_menu_edit"] option[value="'+data.cek.id_menu+'"]').prop('selected', true);
                    $('[name="qty_edit"]').val(data.cek.qty);
                    $('[name="id_order"]').val(data.cek.id_order);
                    $('#edit_data').modal('show');
                }
            });
        });

        $(document).on('click', '#btn_update', function(e){
            e.preventDefault(e);
            var data=$('#form_edit').serialize();
            $.ajax({
                url:'<?php echo base_url('order/update_data') ?>', 
                type:'post',
                dataType:'json',
                data:data,//Ngambil dari atas
                success: function(response){
                if (response.error) {
                    $('.error_id_menu').html(response.error.id_order);
                    $('.error_qty').html(response.error.qty);
                }else{
                    $('#edit_data').modal('hide');
                    
                    // alert('Data berhasil di update');
                    location.reload();
                }
                }
            })
        });


        $(document).on('click','#btn_hapus',function(){
            var edit_id=$(this).attr("value");
            $.ajax({
                url:'<?php echo base_url('order/hapus_data') ?>', 
                type:'post',
                dataType:'json',
                data:{id_order:edit_id},//Ngambil dari atas
                success: function(response){
                    if(response.sukses){
                        alert('Data Berhasil Dihapus !');
                    }
                }
            })

        });

    });//end ready function

</script>
