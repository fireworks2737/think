<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
				<div class="result-title">
					<div class="result-list">
						<a href="/index.php/Admin/Homepage/update"> &nbsp; &nbsp; <i class="icon-font">&#xe002;</i>修改内容</a>
					</div>
				 </div>    
				<div class="result-content" >
                    <table class="result-tab"  >
                        <tr>
							<th width="30px"></th>
                            <th width="150px">名称</th>
                            <th width="800px">内容</th>
                        </tr>
						<tbody id = "conte">
                        <tr>
							<td></td>
                            <td>左侧图片</td>
                            <td><img src="<?php echo ($re["left_img"]); ?>" height="100px" width="100px"/></td>
                        </tr>
                        <tr>
							<td height="100px"></td>
                            <td>左侧文本</td>
                            <td><?php echo ($re["left_txt"]); ?></td>
                        </tr>
						<tr>
							<td></td>
                            <td>文档路径</td>
                            <td><?php echo ($re["word_src"]); ?></td>
                        </tr>
						<tr>
							<td></td>
                            <td>右侧标题</td>
                            <td><?php echo ($re["right_title"]); ?></td>
                        </tr>
						<tr>
							<td height="100px"></td>
                            <td>右侧内容</td>
                            <td><?php echo ($re["right_content"]); ?></td>
                        </tr>
						</tbody>
                    </table>
					<br />
                    <div class="green-black" id="paged"><?php echo ($page); ?></div>
                </div>
        </div>