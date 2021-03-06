<?php include "template/head.php" ?>
    <title>News Link Report</title>
<?php include "template/nav.php" ?>

<!--        content start -->
        <div class="col-12 col-md-11 cus-feft">
            <div class="pt-4">

                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <h4 class="text-black-50">Data Source</h4>
                            <hr>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-hover" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-end">Go</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>​ခြေချင်းဝတ်ဒဏ်ရာ ရရှိလာ RICE စည်းနည်းဖြစ်ပြုစုပါ</td>
                                    <td class="text-end"><a href="data/index.html" class="btn btn-dark">View</a></td>
                                </tr>
                                <tr>
                                    <td>​မူးမေ့ခြင်း (FAINTING)</td>
                                    <td class="text-end"><a href="data/1.html" class="btn btn-dark">View</a></td>
                                </tr>
                                <tr>
                                    <td>ရေကားကို သတိထားကြပါနော်။</td>
                                    <td class="text-end"><a href="data/2.html" class="btn btn-dark">View</a></td>
                                </tr>
                                <tr>
                                    <td>မျက်ရည်ယိုဗုံးကဲ့သို့ မီးခိုးမွှန်နေသူကို ဘယ်လိုပြုစုရမလဲ</td>
                                    <td class="text-end"><a href="data/3.html" class="btn btn-dark">View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<!--        content end-->

    </div>
</section>
<!--This is content end-->




<section class="container-fluid position-fixed bottom-0 start-0 end-0 bg-dark p-2 d-block d-md-none">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <a href="send.html" class="col-3 btn btn-dark text-nowrap"><i class="fas fa-star"></i></a>
                    <a href="index.php" class="col-3 btn btn-dark text-nowrap"><i class="fas fa-home"></i> Home</a>
                    <a href="about.html" class="col-3 btn btn-dark text-nowrap"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "template/footer-link.php"?>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false });
    });
</script>

</body>
</html>