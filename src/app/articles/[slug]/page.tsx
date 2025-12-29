import React from "react";
import { articles } from "@/lib/articles-data";
import ArticleClient from "./ArticleClient";
import { Metadata } from "next";

export function generateStaticParams() {
  return articles.map((article) => ({
    slug: article.slug,
  }));
}

interface PageProps {
  params: Promise<{ slug: string }>;
}

export async function generateMetadata({ params }: PageProps): Promise<Metadata> {
  const { slug } = await params;
  const decodedSlug = decodeURIComponent(slug);
  const article = articles.find((a) => a.slug === decodedSlug);
  
  if (!article) {
    return {
      title: "Статья не найдена | Extramed-Psy",
    };
  }

  return {
    title: `${article.title} | База знаний Extramed-Psy`,
    description: article.excerpt,
  };
}

export default async function ArticlePage({ params }: PageProps) {
  const { slug } = await params;
  const decodedSlug = decodeURIComponent(slug);
  const article = articles.find((a) => a.slug === decodedSlug);

  if (!article) {
    return (
      <div className="flex flex-col items-center justify-center min-h-screen p-4 bg-[#fafafa]">
        <div className="text-center">
          <h1 className="text-3xl font-black text-slate-900 mb-4 tracking-tighter">Материал не найден</h1>
          <p className="text-slate-500 mb-8 max-w-xs mx-auto font-medium">К сожалению, запрашиваемая статья была перемещена или удалена.</p>
        </div>
      </div>
    );
  }

  return <ArticleClient article={article} />;
}
