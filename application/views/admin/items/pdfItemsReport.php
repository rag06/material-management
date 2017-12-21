			<br/>
						  <h3 class="box-title" style="margin:20px;">Items List  </h3>
							<table id="" cellpadding="10" border="1px" style="width:100%;border:1px solid; border-collapse: collapse;margin:20px;">
								<thead>
								<tr>
								  <th style="width: 10px;border: 1px solid black;">#</th>
								  <th style="border: 1px solid black;">Item Name</th>
								  <th style="border: 1px solid black;">Brand</th>
								  <th style="border: 1px solid black;">Type</th>
								  <th style="border: 1px solid black;">Quantity</th>
								</tr>
								</thead>
								<tbody>
										<?php 
								$i=1;
									foreach($items['result'] as $row){
										?>
									<tr>
									  <td  style="border: 1px solid black;"><?php echo $i;?>.</td>
									  <td  style="border: 1px solid black;"><?php echo $row->Items_Name;?></td>
									  <td  style="border: 1px solid black;"><?php echo $row->Items_Brand;?></td>
									  <td  style="border: 1px solid black;">
									  <?php if($row->Items_Type==1){
												echo 'Workshop';
											}else{
												echo 'Stationary';
											}
										?>
									</td>
									  <td  style="border: 1px solid black;"><?php echo $row->Items_Qty;?></td>
									 
									</tr>
										<?php $i++;}?>
								</tbody>
								
							  </table>