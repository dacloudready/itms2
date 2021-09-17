<?=$this->extend('layout/default'); ?>

<?=$this->section('css'); ?>
<style>
    #txtArea{
        resize:none;
        border: none;
        background:transparent;
    }
</style>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card card-default">
			<div class="card-body">
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p class="h4 mb-4 text-muted"><strong>ID#<?="{$request->id}: {$request->subject} | {$request->category}"; ?></strong></p>
                    </div>
                    <div class="px-2">
                        <a href="#"><i class="align-middle" data-feather="edit"></i></a>
                    </div>
                    <div class="px-2">
                        <a href="#" id="btnPrintDiv"><i class="align-middle" data-feather="printer"></i></a>
                    </div>
                    <div class="px-2">
                        <a href="#"><i class="align-middle" data-feather="check-square"></i></a>
                    </div>
                </div>

                <table class="table table-bordred">
                    <thead class="bg-dark text-light">

                        <th colspan="2">DETAILS</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="20%"><strong>REQUESTED BY:</strong></td>
                            <td width="80%"><?=$request->requestor;?></td>
                        </tr>
                        <tr>
                            <td><strong>DATE:</strong></td>
                            <td><?=$request->request_date;?></td>
                        </tr>

                        <tr>
                            <td><strong>BRANCH:</strong></td>
                            <td><?=$request->branch;?></td>
                        </tr>

                        <tr>
                            <td><strong>DEPARTMENT:</strong></td>
                            <td><?=$request->department;?></td>
                        </tr>

                        <tr>
                            <td><strong>PRIORITY:</strong></td>
                            <td><?=set_status($request->priority);?></td>
                        </tr>

                        <tr>
                            <td><strong>STATUS</td>
                            <td><?=set_status($request->status);?>
                        </tr>
                    </tbody>
                </table>
                <div class="px-2"> 
                    <p><strong>DESCRIPTION:</strong></p>
                    <textarea class="form-control" id="txtArea" cols="50" rows="12" disabled><?=trim($request->description);?></textarea>
                </div>
               
                <hr>
                
                <small><em>tags: <?=$request->search_tag;?></em></small>
            </div>
        </div>
    </div>
</div>

<!-- NOTES/LOGS -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p><strong> NOTES:</strong></p>
                    </div>
                    <div class="px-2">
                        <a alt-text="Click to add new notes." id="addNotes"><i class="align-middle" data-feather="file-plus"></i></a>
                    </div>
                </div>
                <table class="table table-bordred" id="tblNotes">
                    <thead class="bg-dark text-light">
                        <th width="15%">DATE</th>
                        <th width="15%">USER</th>
                        <th width="70%">MESSAGE</th>
                    </thead>
                    <tbody>

                        <?php if( count($comments) == 0 ): ?>
                            <tr>
                                <td colspan="6">
                                   <center> No data available</center>
                                </td>
                            </tr>
                        <?php endif;?>

                        <?php foreach($comments as $comment): ?>
                        <tr>
                            <td><?=$comment->date_performed;?></td>
                            <td>me</td>
                            <td><?=$comment->action;?></td>
                        </tr>
                        <?php endforeach ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- PO ENTRY -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p><strong> PURCHASE DETAILS:</strong></p>
                    </div>
                    <div class="px-2">
                        <a href="#" alt="Click to add purchase details"><i class="align-middle" data-feather="file-plus"></i></a>
                    </div>
                </div>
                <div style="overflow:auto; scroll:bottom">
                    <table class="table table-bordred table-responsive">
                        <thead class="bg-dark text-light">
                            <th>PO#</th>
                            <th>DATE</th>
                            <th>VENDOR</th>
                            <th>SHIP TO</th>
                            <th>TOTAL</th>
                            <th>STATUS</th>
                        </thead>
                        <tbody>

                        <?php if( count($orders) == 0 ): ?>
                            <tr>
                                <td colspan="6">
                                   <center> No order data available</center>
                                </td>
                            </tr>
                        <?php endif;?>

                            <?php foreach($orders as $order): ?>
                            <tr>
                                <td><?=$order->po_number; ?></td>
                                <td><?=$order->po_date; ?></td>
                                <td><?=$order->supplier; ?></td>
                                <td><?=$order->delivery_address; ?></td>
                                <td><?=number_format($order->total, 2); ?></td>
                                <td><?=$order->status; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

  <div id="print_preview" class="d-none d-print-block" >
    <div class="row">
            <div class="d-flex">
                <div class="d-inline py-4"><h5><strong>INTER-DEPARTMENT REQUISITION FORM</strong></h3>
                </div>
                <div class="ms-auto d-inline">
                    <img style="width:300px" src="<?=base_url('img/Gateway_logo.png')?>"></img>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <td colspan="3" ><strong>REQUEST#:<?=$request->id?></strong></td>
                </tr>
                <tr>
                    <td style="width:50%">
                        <p>
                            Requested By: <?=$request->requestor?> <br/>
                            Branch: <?=$request->branch?> <br/>
                            Department: <?=$request->department?> <br/>
                        </p>
                    </td>
                    <td colspan="2">
                        <p>
                            Date: <?=$request->request_date?><br/>
                            Category: <?=$request->category?> <br/>
                            Priority: <?=$request->priority?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><strong>DESCRIPTION:</strong></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <pre style="border:none;background-color:#fff;font-family: 'Helvetica Neue',sans-serif;font-size: 14px;"><?=$request->description?></pre>
                    </td>
                </tr>
                
                <tr>
                    <table class="table table-bordered">
                        <tr>
                            <td ><strong>Prepared By:</strong></td>
                            <td ><strong>Noted By:</strong></td>
                            <td><strong>Approved By:</strong></td>
                        </tr>

                        <tr>
                            <td><div style="height:20px;text-align:center">ROMEO JUNELL DOSDOS</div></td>
                            <td><div style="height:20px;text-align:center">DAN LUTHER AVERGONZADO</div></td>
                            <td><div style="height:20px;text-align:center">ERAILE BRUAN</div></td>
                        </tr>
                        <tr>
                            <td><div style="font-size:10px;height:5px;text-align:center">Signature Over Printed Name</div></td>
                            <td><div style="font-size:10px;height:5px;text-align:center">Signature Over Printed Name</div></td>
                            <td><div style="font-size:10px;height:5px;text-align:center">Signature Over Printed Name</div></td>
                        </tr>
                    </table>
                </tr>
            </table>
            <div class="pull-right">	
        </div>
        </div>
    </div>
</div>


<?=$this->endSection(); ?>


<?=$this->section('js');?>
<script type="text/javascript">

   $(document).ready(function(){
        // =================================
        // methods, functions and declations
        // =================================

       const printDiv = function(){
            var divContents = document.getElementById("print_preview").innerHTML;
            var app_css = document.getElementById("app_css").href;
            var a = window.open('', '', 'height=1000, width=1000');
            a.document.write('<html>');
            a.document.write('<head><link href="'+app_css+'" rel="stylesheet"></head');
            a.document.write('<body style="background:white"> <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
       }

        let newRow = '';
        let objTxtInput = '';
        let txtReqID = '';
        const addNewRow = function(){
            const objTblNotes =  $('#tblNotes tr:last');
            const newTblRow = "<tr>" +
                                "<td><?=date('Y-m-d H:i:s');?></td>" + 
                                "<td>me</td>" +
                                "<td>" +
                                    "<input type='hidden' name='requestid' id='requestid' value='<?=$request->id?>' />" + 
                                    "<input class='form-control' type='text' name='note' id='txtNote' /> " +
                                "</td>" +
                              "</tr>";
                    objTblNotes.after(newTblRow);
                    objTxtInput = $('#txtNote');
                    txtReqID = $('#requestid').val();

            newRow = true;
        }

        const addNewNote = function(){
            let url = "<?=base_url('/add-comment');?>";
            $.post(url, {'note': objTxtInput.val(), 'requestid':  txtReqID}, function(){
                $("#tblNotes").load(location.href + " #tblNotes");
                newRow = false;
            });
            
        }

         // =================================
        //  EVENT LISTENERS
        // =================================
        $('#btnPrintDiv').on('click', function(){
            printDiv();
       });

        $('#addNotes').on('click', function(){
            if(newRow != true){
                addNewRow();
                objTxtInput.focus();
                objTxtInput.keyup(function(e){
                    if(e.keyCode == 13 && objTxtInput.val().length !== 0){ 
                         addNewNote(); 
                    }
                });
            }
        });
   });
        
    </script>
<?=$this->endSection(); ?>