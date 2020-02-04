<?php

class Data extends CI_Controller {

 

    public function __construct()

    {

        parent::__construct();

        $this->load->library('pdf');

    }

    

    public function pdf()

    {

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->setPrintFooter(false);

        $pdf->setPrintHeader(false);

        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

        $pdf->AddPage('');

        $pdf->Write(0, 'Simpan ke PDF - Jaranguda.com', '', 0, 'L', true, 0, false, false, 0);

        $pdf->SetFont('');

 

        $tabel = '

        <table border="1">
              <tr>
                    <th> <b>Provinsi</b> </th>
                    <th> <b>Jumlah Penduduk</b> </th>
              </tr>

 
              <tr>
                    <td> Aceh </td>
                    <td> 5.189.500 </td>
              </tr>
              <tr>
                    <td> Bali </td>
                    <td> 4.246.500 </td>
              </tr>
              <tr>
                    <td> Banten </td>
                    <td> 12.448.200 </td>
              </tr>
              <tr>
                    <td> Bengkulu </td>
                    <td> 1.934.300 </td>
              </tr>
              <tr>
                    <td> DI Yogyakarta </td>
                    <td> 3.762.200 </td>
              </tr>
              <tr>
                    <td> DKI Jakarta </td>
                    <td> 10.374.200 </td>
              </tr>
              <tr>
                    <td> Gorontalo </td>
                    <td> 1.168.200 </td>
              </tr>
              <tr>
                    <td> Jambi </td>
                    <td> 3.515.000 </td>
              </tr>
              <tr>
                    <td> Jawa Barat </td>
                    <td> 48.037.600 </td>
              </tr>
              <tr>
                    <td> Jawa Tengah </td>
                    <td> 34.257.900 </td>
              </tr>
              <tr>
                    <td> Jawa Timur </td>
                    <td> 39.293.000 </td>
              </tr>
              <tr>
                    <td> Kalimantan Barat </td>
                    <td> 4.932.500 </td>
              </tr>
              <tr>
                    <td> Kalimantan Selatan </td>
                    <td> 4.119.800 </td>
              </tr>
              <tr>
                    <td> Kalimantan Tengah </td>
                    <td> 2.605.300 </td>
              </tr>
              <tr>
                    <td> Kalimantan Timur </td>
                    <td> 3.575.400 </td>
              </tr>
              <tr>
                    <td> Kalimantan Utara </td>
                    <td> 691.100 </td>
              </tr>
              <tr>
                    <td> Kepulauan Bangka Belitung </td>
                    <td> 1.430.900 </td>
              </tr>

        </table>

        ';

        $pdf->writeHTML($tabel);

        $pdf->Output('file-pdf-codeigniter.pdf', 'I');

    }



    

    public function print($tipebelajar, $tipepdf)

    {
         

      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $pdf->setPrintFooter(false);
      $pdf->setPrintHeader(false);
      $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
      $pdf->AddPage('');
      $pdf->Write(0, 'Simpan ke PDF - Pegasbelajar.com', '', 0, 'L', true, 0, false, false, 0);
      $pdf->SetFont('');
      

      $login = $this->db->get_where('siswa', ['email' => $this->session->userdata('email')])->row();
      $gaya = $this->db->get_where('gaya_belajar', ['id_gaya_belajar' => $tipebelajar])->row();
     
     
      // $stringHTML = "
      //       <body>
      //       <section class='hasil_section'>
      //             <section class='ftco-section'>
      //                   <div class='container'>
      //                   <div class='row justify-content-center mb-3'>
      //                         <div class='col-md-10'>
      //                               <div class='card pl-5 pr-5'>
      //                               <div class='row'>
      //                                     <div class='col-md-8'>
      //                                           <table class='table table-borderless'>
      //                                           <tr>
      //                                                 <th>Nama</th>
      //                                                 <th>:</th>
      //                                                 <th>". $login->nama . "</th>
      //                                           </tr>
      //                                           <tr>
      //                                                 <th>NIS</th>
      //                                                 <th>:</th>
      //                                                 <th>". $login->nis . "</th>
      //                                           </tr>
      //                                           <tr>
      //                                                 <th>Asal Sekolah</th>
      //                                                 <th>:</th>
      //                                                 <th>" . $login->asal_sekolah . "</th>
      //                                           </tr>
      //                                           <tr>
      //                                                 <th>Gaya Belajar Dominan</th>
      //                                                 <th>:</th>
      //                                                 <th>" . $gaya->nama_gaya_belajar  . "</th>
      //                                           </tr>
      //                                           </table>
      //                                     </div>
      //                               </div>
      //                               </div>
      //                         </div>
      //                   </div>
      //                   </div>
      //                   <div class='container'>
      //                   <div class='row justify-content-center'>
      //                         <div class='col-md-10 text-center mb-3'>
      //                               <div class='row'>
      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                           <h4>Kekuatan</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                           <p>". $gaya->kekuatan  . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>
      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                           <h4>Kelemahan</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                           <p>".  $gaya->kelemahan . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>
      //                               </div>
      //                         </div>
      //                   </div>
      //                   </div>
      //                   <div class='container'>
      //                   <div class='row justify-content-center'>
      //                         <div class='col-md-10 text-center mb-3'>
      //                               <div class='row'>
      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                           <h4>Tipe Kepribadian</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                           <p>" . $gaya->tipe_kepribadian . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>


      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                                 <h4>Tugas Yang Sesuai</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                                 <p>" . $gaya->tugas_yg_sesuai . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>
      //                               </div>
      //                         </div>
      //                   </div>
      //                   </div>


      //                   <div class='container'>
      //                   <div class='row justify-content-center'>
      //                         <div class='col-md-10 text-center mb-3'>
      //                               <div class='row'>
      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                           <h4>Kemampuan Adaptif</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                                 <p>" . $gaya->kemampuan_adaptif . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>
      //                               <div class='col-md-6'>
      //                                     <div class='card'>
      //                                           <div class='card-header'>
      //                                                 <h4>Cara Belajar Yang Sesuai</h4>
      //                                           </div>
      //                                           <div class='card-body'>
      //                                                 <p>" .  $gaya->cara_belajar . "</p>
      //                                           </div>
      //                                     </div>
      //                               </div>
      //                               </div>
      //                         </div>
      //                   </div>
      //                   </div>


      //                   <div class='container'>
      //                   <div class='row justify-content-center'>
      //                         <div class='col-md-10 text-center mb-5'>
      //                               <div class='card'>
      //                               <div class='card-header'>
      //                                     <h4>Metode Mengajar Guru Yang Sesuai</h4>
      //                               </div>
      //                               <div class='card-body'>
      //                                     <p>" . $gaya->metode_guru . "</p>
      //                               </div>
      //                               </div>
      //                         </div>
      //                   </div>
      //                   </div>
      //             </section>




      //       </section>


      //       <!-- loader -->
      //       <div id='ftco-loader' class='show fullscreen'><svg class='circular' width='48px' height='48px'>
      //                   <circle class='path-bg' cx='24' cy='24' r='22' fill='none' stroke-width='4' stroke='#eeeeee' />
      //                   <circle class='path' cx='24' cy='24' r='22' fill='none' stroke-width='4' stroke-miterlimit='10' stroke='#F96D00' /></svg></div>



      //       </body>


      //       </html>

      // ";

      $stringHTML = "
<html>
      <head>
              <title>CSS Template</title>
              <meta charset='utf-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <style>
              * {
                box-sizing: border-box;
              }
              
              body {
                font-family: Arial, Helvetica, sans-serif;
              }
              
              /* Style the header */
              header {
                background-color: #666;
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: white;
              }
              
              /* Create two columns/boxes that floats next to each other */
              nav {
                float: left;
                width: 30%;
                height: 300px; /* only for demonstration, should be removed */
                background: #ccc;
                padding: 20px;
              }
              
              /* Style the list inside the menu */
              nav ul {
                list-style-type: none;
                padding: 0;
              }
              
              article {
                padding: 20px 10% 30px 10% ;
                width: 100%;
                
              }

              article table{
                      padding: 20px;
              }

              td{
                      padding : 20px;
              }
              
              /* Clear floats after the columns */
              section:after {
                content: '';
                display: table;
                clear: both;
              }
              
              /* Style the footer */
              footer {
                background-color: #777;
                padding: 10px;
                text-align: center;
                color: white;
              }
              p{
                      text-align: justify;
              }
              
              /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
              @media (max-width: 600px) {
                nav, article {
                  width: 100%;
                  height: auto;
                }
              }
              </style>
      </head>

      <body>
            <header style='background-color: #666;padding: 30px;text-align: center;font-size: 35px;color: white;'>
                  <h2>Hasil Tes Pegas Belajar</h2>
            </header>
            <section>
                  <article>
                        <table>
                        <tr>
                        <td colspan='2'>
                                <!-- <table>
                                    <tr class=''>
                                            <td>Nama </td>
                                            <td>".  $login->nama . "</td>
                                    </tr>
                                    <tr>
                                            <td>NIS </td>
                                            <td>" .  $login->nis . "</td>
                                    </tr>
                                    <tr>
                                            <td>Asal Sekolah </td>
                                            <td>" . $login->asal_sekolah . " </td>
                                    </tr>
                                </table> -->
                                <center><h1>".  $login->nama . "</h1>
                                      <p></p> " .  $login->nis . ", ". $login->asal_sekolah . "</p>  </h5>
                                <h4>Tipe Belajar : </h4></center>
                        </td>
                </tr>
                        </table>
                  </article>
            </section>

      </body>
</html>
      ";


      $pdf->writeHTML($stringHTML);

      $pdf->Output('file-pdf-codeigniter.pdf', $tipepdf);

    }

 

}