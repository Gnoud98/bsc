<section class="bg-primary-200 lg:py-[77px] py-14">
	<div class="container">
		<div class="grid grid-cols-3 gap-5">
			<div class="md:col-span-2 col-span-full">
				<h2
					class="pl-6 border-l-2 border-primary-300 text-[28px] font-bold mb-7 text-primary-300 leading-none">
					Hiệu suất danh mục</h2>
				<div class="bg-white rounded-2xl p-7">
					<div class="flex justify-between items-center mb-6">
						<div class="space-x-2 px-[6px] py-[2px] rounded-xl bg-[#F8F8FF]">
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white active bg-primary-700  rounded-[10px]">BSC10</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC30</button>
							<button
								class="px-4 py-2 [&:not(.active)]:bg-transparent [&:not(.active)]:text-black text-white  bg-primary-700  rounded-[10px]">BSC50</button>
						</div>

						<div class="flex items-center space-x-4">
							<span>Thời gian:</span>
							<input type="date" class="border rounded p-2" value="Mar 02, 2024">
							<input type="date" class="border rounded p-2" value="Aug 02, 2024">
						</div>
					</div>

					<div id="chart"></div>

					<div class="flex justify-center mt-6">
						<div class="space-x-2">
							<button class="px-4 py-2 bg-blue-500 text-white rounded">BSC10</button>
							<button
								class="px-4 py-2 bg-gray-200 text-gray-700 rounded">VNINDEX</button>
							<button
								class="px-4 py-2 bg-gray-200 text-gray-700 rounded">VNDIAMOND</button>
						</div>
					</div>

					<div class="subscribe flex justify-between items-center mt-6 gap-x-3">
						<input type="text" placeholder="Nhập email nhận báo cáo phân tích từ BSC"
							class="rounded-lg border p-3 w-3/4">
						<button class="bg-yellow-500 text-white py-3 px-6 rounded-lg flex-1">Đăng
							ký</button>
					</div>

				</div>
			</div>
			<div class="md:col-span-1 col-span-full">
				<div class="flex items-center justify-between mb-7">
					<h2
						class="pl-6 border-l-2 border-primary-300 text-[28px] font-bold text-primary-300 leading-none">
						Báo cáo phân tích
					</h2>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 ml-9">
						<?php echo svg( 'arrow-btn', '20', '20' ) ?>
						Xem tất cả
					</a>
				</div>
				<div class="bg-white rounded-[10px] px-6 py-4 mb-4">
					<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9]">
						Khuyến nghị
					</p>
					<ul class="space-y-4">
						<?php
						for ( $i = 0; $i < 5; $i++ )
						{
							?>
							<li class="flex font-bold gap-[14px] items-center justify-between">
								<p class="line-clamp-1 flex-1">
									BID <span class="text-green">(+25%) MUA MẠNH</span> - Ngân hàng đầu
									tư
								</p>

								<p
									class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px]">
									Hot</p>
								<a href="">
									<?php echo svg( 'download' ) ?>
								</a>
							</li>
							<?php
						}
						?>
					</ul>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 mt-6">
						<?php echo svg( 'arrow-btn', '20', '20' ) ?>
						Xem thêm</a>
				</div>
				<div class="bg-white rounded-[10px] px-6 py-4">
					<p class="font-bold text-xl pb-3 mb-3 border-b border-[#D9D9D9] text-center">
					Báo cáo Ngành - Doanh nghiệp
					</p>
					<ul class="space-y-4">
						<?php
						for ( $i = 0; $i < 4; $i++ )
						{
							?>
							<li class="flex font-bold gap-[14px] items-center justify-between">
								<p class="line-clamp-1 flex-1">
									BID <span class="text-green">(+25%) MUA MẠNH</span> - Ngân hàng đầu
									tư
								</p>
								<p
									class="inline-block bg-[#FF5353] rounded text-white uppercase py-1 px-2 font-normal text-[13px]">
									Hot</p>
								<a href="">
									<?php echo svg( 'download' ) ?>
								</a>
							</li>
							<?php
						}
						?>
					</ul>
					<a href=""
						class="text-green font-semibold inline-flex gap-x-3 items-center transition-all duration-500 hover:text-primary-300 mt-6">
						<?php echo svg( 'arrow-btn', '20', '20' ) ?>
						Xem thêm</a>
				</div>
			</div>
		</div>
	</div>
</section>