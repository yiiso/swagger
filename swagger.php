<?php

/**
 * @SWG\Definition(
 *     definition="User",
 *     type="object",
 *     required={"username"},
 *     @SWG\Property(property="id",example="title id",type="integer",description="主键id"),
 *     @SWG\Property(property="username",type="string",description="用户名"),
 *     @SWG\Property(property="password",type="string",description="密码"),
 *     @SWG\Property(property="status",type="string",description="状态"),
 *     @SWG\Property(property="createdAt",type="string",description="创建时间",format="date"),
 *     @SWG\Property(property="updatedAt",type="string",description="更新时间",format="dateTime"),
 *     @SWG\Property(property="deletedAt",type="string",description="删除时间"),
 * )
 */


/**
 * @SWG\Definition(
 *     definition="UserDetail",
 *     type="object",
 *     required={"username"},
 *     @SWG\Property(property="id",example="title id",type="integer",description="主键id"),
 *     @SWG\Property(property="userId",example="title id",type="integer",description="用户id"),
 *     @SWG\Property(property="nickname",type="string",description="用户名"),
 *     @SWG\Property(property="sex",type="string",description="密码"),
 *     @SWG\Property(property="avatar",type="string",description="状态"),
 *     @SWG\Property(property="profile",type="string",description="状态"),
 *     @SWG\Property(property="createdAt",type="string",description="创建时间",format="date"),
 *     @SWG\Property(property="updatedAt",type="string",description="更新时间",format="dateTime"),
 *     @SWG\Property(property="deletedAt",type="string",description="删除时间"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="Post",
 *     type="object",
 *     required={"username"},
 *     @SWG\Property(property="id",example="title id",type="integer",description="主键id"),
 *     @SWG\Property(property="userId",example="title id",type="integer",description="用户id"),
 *     @SWG\Property(property="title",type="string",description="标题"),
 *     @SWG\Property(property="body",type="string",description="内容"),
 *     @SWG\Property(property="link",type="string",description="链接"),
 *     @SWG\Property(property="createdAt",type="string",description="创建时间",format="date"),
 *     @SWG\Property(property="updatedAt",type="string",description="更新时间",format="dateTime"),
 *     @SWG\Property(property="deletedAt",type="string",description="删除时间"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="Person",
 *     type="object",
 *     required={"username"},
 *     @SWG\Property(property="id",example="title id",type="integer",description="主键id"),
 *     @SWG\Property(property="userId",type="integer",description="用户id"),
 *     @SWG\Property(property="title",type="string",description="标题"),
 *     @SWG\Property(property="body",type="string",description="内容"),
 *     @SWG\Property(property="link",type="string",description="链接"),
 *     @SWG\Property(property="avatarBase64PNG",type="string",format="byte",description="头像base64编码"),
 *     @SWG\Property(property="createdAt",type="string",description="创建时间",format="date"),
 *     @SWG\Property(property="code",type="string",enum={"DBERR", "NTERR", "UNERR"}),
 *     @SWG\Property(property="updatedAt",type="string",description="更新时间",format="dateTime"),
 *     @SWG\Property(property="deletedAt",type="string",description="删除时间"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="Success_example",
 *     type="object",
 *     required={},
 *     @SWG\Property(property="page",example="1",type="integer",description="页码"),
 *     @SWG\Property(property="limit",type="integer",description="每页数"),
 *     @SWG\Property(property="count",type="integer",description="总数"),
 *     @SWG\Property(property="data",type="object",
 *          allOf = {
 *              @SWG\Schema(ref="#/definitions/Person"),
 *              @SWG\Schema(@SWG\Property(property="post",type="object",ref="#/definitions/Post")),
 *              @SWG\Schema(@SWG\Property(property="selfAdd",type="string",description="在模型中添加新字段")),
 *          }),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="SuccessArray",
 *     type="object",
 *     required={},
 *     @SWG\Property(property="code",example="200",type="integer",description="统一返回识别码"),
 *     @SWG\Property(property="page",example="1",type="integer",description="页码"),
 *     @SWG\Property(property="limit",type="integer",description="每页数"),
 *     @SWG\Property(property="count",type="integer",description="总数"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="SuccessObject",
 *     type="object",
 *     required={},
 *     @SWG\Property(property="code",example="200",type="integer",description="统一返回识别码"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="Success",
 *     type="object",
 *     required={},
 *     @SWG\Property(property="code",example="200",type="integer",description="统一返回识别码"),
 *     @SWG\Property(property="data",example="true",type="boolean",description="成功或失败"),
 * )
 */

/**
 * @SWG\Definition(
 *     definition="Failed",
 *     type="object",
 *     required={},
 *     @SWG\Property(property="code",example="200",type="integer",description="统一返回识别码"),
 *     @SWG\Property(property="message",example="访问错误",type="string",description="错误提示"),
 * )
 */

