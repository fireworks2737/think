<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <form action="/ceshi1/index.php/Admin/Patient/more_delete" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/ceshi1/index.php/Admin/Patient/insert" style="font-size:12px;color:black;"><i class="icon-font"></i>新增文件</a>
                        <i class="icon-font"></i><input type="submit" value="批量删除" style="border:none;background:none;color:black;font-size:12px;"/>
                    </div>
                </div>
                <div class="result-content" >
                    <table class="result-tab" width="62%" >
                        <tr>
                            <th class="tc" width="5%"></th>
                            <th>ID</th>
                            <th>文件名</th>
                            <th>路径</th>
                            <th>操作</th>
                        </tr>
						<tbody id = "conte">
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($v["id"]); ?>" type="checkbox" /></td>
							
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["pdf_name"]); ?></td>
                            <td><?php echo ($v["pdf_src"]); ?></td>
                            <td>
                                <a class="link-update" href="/ceshi1/index.php/Admin/Patient/update/id/<?php echo ($v["id"]); ?>">修改</a>
                                <a class="link-del" href="/ceshi1/index.php/Admin/Patient/delete/id/<?php echo ($v["id"]); ?>" >删除</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
						</tbody>
                    </table>
					<br />
                    <div class="green-black" id="paged"><?php echo ($page); ?></div>
                </div>
            </form>
        </div>