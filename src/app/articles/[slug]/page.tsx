"use client";

import React from "react";
import Link from "next/link";
import { useParams, useRouter } from "next/navigation";
import { Heart, ArrowLeft, Phone, Calendar, User, Share2 } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { articles } from "@/lib/articles-data";
import { motion } from "framer-motion";

export default function ArticlePage() {
  const { slug } = useParams();
  const router = useRouter();
  const article = articles.find((a) => a.slug === slug);

  if (!article) {
    return (
      <div className="flex flex-col items-center justify-center min-h-screen p-4">
        <h1 className="text-2xl font-bold mb-4">Статья не найдена</h1>
        <Button onClick={() => router.push("/articles")}>Вернуться к статьям</Button>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-background">
      {/* Header */}
      <header className="fixed top-0 z-50 w-full border-b bg-background/80 backdrop-blur-md">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <Link href="/" className="flex items-center gap-2">
            <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Heart className="h-6 w-6" />
            </div>
            <div className="flex flex-col">
              <span className="text-xl font-bold tracking-tight text-primary leading-none">Extramed-Psy</span>
              <span className="text-[10px] uppercase tracking-wider text-muted-foreground font-medium">Краснодар</span>
            </div>
          </Link>
          <Button variant="outline" className="hidden sm:flex border-primary text-primary hover:bg-primary hover:text-primary-foreground">
            <Phone className="mr-2 h-4 w-4" />
            +7 (861) 000-00-00
          </Button>
        </div>
      </header>

      <main className="pt-24 pb-20">
        <div className="container mx-auto px-4 max-w-4xl">
          <Link href="/articles" className="inline-flex items-center text-primary hover:underline mb-8 transition-all">
            <ArrowLeft className="mr-2 h-4 w-4" />
            Все статьи
          </Link>

          <article>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.5 }}
            >
              <Badge className="mb-4 bg-primary/10 text-primary hover:bg-primary/20 border-none px-4 py-1">Полезная информация</Badge>
              <h1 className="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-primary mb-6 leading-tight">
                {article.title}
              </h1>

              <div className="flex flex-wrap gap-6 mb-10 text-sm text-muted-foreground border-y py-4 border-primary/10">
                <div className="flex items-center gap-2">
                  <Calendar className="h-4 w-4 text-primary" />
                  <span>Обновлено: 2024</span>
                </div>
                <div className="flex items-center gap-2">
                  <User className="h-4 w-4 text-primary" />
                  <span>Врач-эксперт</span>
                </div>
                <div className="flex items-center gap-2">
                  <Share2 className="h-4 w-4 text-primary" />
                  <span>Поделиться</span>
                </div>
              </div>

              <div className="prose prose-lg prose-primary max-w-none space-y-6 text-foreground/90 leading-relaxed">
                {article.content.map((p, i) => (
                  <p key={i} className={i === 0 ? "text-xl font-medium text-primary mb-8" : ""}>
                    {p}
                  </p>
                ))}
              </div>
            </motion.div>
          </article>

          {/* CTA Box in Article */}
          <div className="mt-16 p-8 rounded-3xl bg-primary/5 border border-primary/10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div className="text-center md:text-left">
              <h3 className="text-2xl font-bold text-primary mb-2">Нужна консультация специалиста?</h3>
              <p className="text-muted-foreground">Мы ответим на все ваши вопросы и поможем подобрать правильную программу ухода.</p>
            </div>
            <Button size="lg" className="rounded-full bg-primary hover:bg-primary/90 text-primary-foreground px-8 h-14 font-bold shadow-xl shadow-primary/20">
              <Phone className="mr-2 h-5 w-5" />
              Позвонить нам
            </Button>
          </div>
        </div>
      </main>

      <footer className="border-t py-12 bg-secondary/20">
        <div className="container mx-auto px-4 text-center">
          <p className="text-muted-foreground text-sm">© 2024 Extramed-Psy. Информация носит ознакомительный характер.</p>
        </div>
      </footer>
    </div>
  );
}
