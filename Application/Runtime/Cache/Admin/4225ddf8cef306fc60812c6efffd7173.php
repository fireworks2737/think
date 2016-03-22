<?php if (!defined('THINK_PATH')) exit();?>        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="900px" >
                        <tbody>
                            <tr>
                                <th width="100px">左侧图片</th>
                                <td width="500px"><input  name="img"  type="file" ></td>
                            </tr>
							<tr>
                                <th width="100px">缩略图</th>
								<td><img src="<?php echo ($result["left_img"]); ?>" height="100px" width="100px"/></td>
                            </tr>
                            <tr>
                                <th>左侧文本</th>
                                <td>
                                    <textarea class="common-text required"  name="left_txt" size="50"  type="text"><?php echo ($result["left_txt"]); ?></textarea>
                                </td>
                            </tr>
							<tr>
                                <th>>文档更换</th>
                                <td><input  name="word"  type="file" ></td>
                            </tr>
                            <tr>
                                <th>右侧标题</th>
                                <td>
                                    <input class="common-text required"  name="right_title" size="50" value="<?php echo ($result["right_title"]); ?>" type="text">
                                </td>
                            </tr>
							<tr>
                                <th>右侧内容</th>
                                <td>
                                    <textarea class="common-text required"  name="right_content" size="50"  ><?php echo ($result["right_content"]); ?></textarea>
                                </td>
                            </tr>
							<tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                </td>
                            </tr>
                        </tbody>
						</table>
                </form>
            </div>
        </div>