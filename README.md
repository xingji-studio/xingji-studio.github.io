# XINGJI Studio Website

XINGJI工作室官方网站，使用 Vue 3 + TypeScript + Tailwind CSS + Vite-SSG 构建。

## 环境要求

- Node.js >= 16.0.0 (或只使用 Deno 构建)
- pnpm >= 8.0.0 (或其他 Node.js 包管理器)

## 项目设置

1. 克隆项目

```bash
git clone https://github.com/xingji-studio/xingji-studio.github.io.git
cd xingji-studio.github.io
```

2. 安装依赖

```bash
pnpm install
```

3. 启动开发服务器

```bash
pnpm dev
```

现在可以在浏览器中访问 http://localhost:5173 查看网站。

4. 构建生产版本

```bash
pnpm build
```

构建后的文件将位于 `dist` 目录中。

## 项目结构

```bash
xingji-studio.github.io/
├── src/                    # 源代码
│   ├── components/        # 通用组件
│   ├── views/            # 页面组件
│   ├── router/           # 路由配置
│   └── App.vue           # 根组件
├── public/               # 静态资源
└── index.html           # HTML 模板
```

## 技术栈

- [Vue 3](https://vuejs.org/)
- [TypeScript](https://www.typescriptlang.org/)
- [Tailwind CSS](https://tailwindcss.com/)
- [Vite](https://vitejs.dev/)

## 许可证

[MIT License](LICENSE)
