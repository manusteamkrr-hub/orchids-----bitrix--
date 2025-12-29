"use client";

import React, { useMemo } from "react";
import Link from "next/link";
import { 
  Heart, Phone, Calendar, User, 
  Share2, Clock, CheckCircle2, Sparkles,
  ChevronRight, Brain, Activity, Users, ShieldAlert,
  MessageSquare, Send, Mail, Menu, ArrowLeft
} from "lucide-react";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import {
  Sheet,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from "@/components/ui/sheet";
import { Article, articles } from "@/lib/articles-data";
import { motion, useScroll, useSpring } from "framer-motion";

interface ArticleClientProps {
  article: Article;
}

export default function ArticleClient({ article }: ArticleClientProps) {
  const { scrollYProgress } = useScroll();
  const scaleX = useSpring(scrollYProgress, {
    stiffness: 100,
    damping: 30,
    restDelta: 0.001
  });

  const relatedArticles = useMemo(() => {
    return articles
      .filter(a => a.slug !== article.slug && (a.category === article.category || !article.category))
      .slice(0, 3);
  }, [article]);

  return (
    <div className="min-h-screen bg-white text-[#1e1b4b] selection:bg-purple-200 selection:text-purple-900">
      {/* Reading Progress Bar */}
      <motion.div
        className="fixed top-0 left-0 right-0 h-1 bg-purple-600 z-[60] origin-left"
        style={{ scaleX }}
      />

      {/* Header */}
      <header className="fixed top-0 z-50 w-full border-b bg-white/80 backdrop-blur-md">
        <div className="container mx-auto flex h-20 items-center justify-between px-4">
          <Link href="/" className="flex items-center gap-3 group">
            <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600 text-white shadow-lg shadow-purple-200 rotate-[-5deg]">
              <Heart className="h-7 w-7 fill-current" />
            </div>
            <div className="flex flex-col">
              <span className="text-2xl font-black tracking-tighter text-purple-700 leading-none">Extramed-Psy</span>
              <span className="text-[10px] uppercase tracking-widest text-muted-foreground font-bold">Краснодар</span>
            </div>
          </Link>
          <nav className="hidden lg:flex items-center gap-8 mr-auto ml-12">
            <Link href="/" className="text-sm font-bold text-slate-600 hover:text-purple-600 transition-colors">Главная</Link>
            <Link href="/articles" className="text-sm font-black text-purple-600 transition-colors border-b-2 border-purple-600">База знаний</Link>
          </nav>
          <div className="flex items-center gap-4">
            <Button size="lg" className="hidden sm:flex rounded-2xl font-black px-6 bg-purple-600 hover:bg-purple-700 shadow-xl shadow-purple-200" asChild>
              <a href="tel:88612906619">
                <Phone className="mr-2 h-5 w-5" />
                8 (861) 290-66-19
              </a>
            </Button>

            <Sheet>
              <SheetTrigger asChild>
                <Button variant="ghost" size="icon" className="lg:hidden">
                  <Menu className="h-7 w-7 text-purple-600" />
                </Button>
              </SheetTrigger>
              <SheetContent side="right">
                <SheetHeader>
                  <SheetTitle className="text-left text-purple-700 font-black">Меню</SheetTitle>
                </SheetHeader>
                <nav className="mt-8 flex flex-col gap-4">
                  <Link href="/" className="text-lg font-bold hover:text-purple-600 py-3 border-b">Главная</Link>
                  <Link href="/articles" className="text-lg font-black text-purple-600 py-3 border-b">База знаний</Link>
                </nav>
              </SheetContent>
            </Sheet>
          </div>
        </div>
      </header>

      <main className="pt-32 pb-32">
        <div className="container mx-auto px-4">
          <div className="max-w-7xl mx-auto grid lg:grid-cols-[1fr_350px] gap-16">
            
            {/* Article Content */}
            <article>
              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.6 }}
              >
                {/* Breadcrumbs */}
                <Link href="/articles" className="inline-flex items-center gap-2 text-sm font-black text-purple-600 uppercase tracking-widest mb-10 group">
                  <ArrowLeft className="w-4 h-4 group-hover:-translate-x-1 transition-transform" /> Вернуться в базу знаний
                </Link>

                <div className="relative aspect-[21/9] rounded-[3rem] overflow-hidden mb-12 shadow-2xl border-[12px] border-slate-50">
                  <img 
                    src={article.image} 
                    alt={article.title}
                    className="w-full h-full object-cover"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent" />
                    <div className="absolute bottom-10 left-10">
                      <Badge className="bg-white/90 text-purple-900 border-none px-5 py-2 rounded-xl font-black text-xs uppercase tracking-widest shadow-xl">
                        {article.category === 'emergency' ? 'Экстренно' : 
                         article.category === 'elderly' ? 'Пожилым' : 
                         article.category === 'psychiatry' ? 'Психиатрия' :
                         article.category === 'psychotherapy' ? 'Психотерапия' :
                         article.category === 'rehab' ? 'Реабилитация' : 'Медицина'}
                      </Badge>
                    </div>

                </div>
                
                <h1 className="text-4xl md:text-6xl font-black text-slate-900 mb-10 leading-[1.05] tracking-tight">
                  {article.title}
                </h1>

                <div className="flex flex-wrap items-center gap-8 mb-12 text-sm font-bold text-slate-500 border-y border-slate-100 py-8">
                  <div className="flex items-center gap-3">
                    <div className="w-12 h-12 rounded-2xl bg-purple-100 flex items-center justify-center text-purple-600">
                      <User className="w-6 h-6" />
                    </div>
                    <div>
                      <p className="text-slate-900 font-black">Клиника Extramed-Psy</p>
                      <p className="text-xs opacity-70">Медицинский совет</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-2">
                    <Clock className="h-5 w-5 text-purple-600" />
                    <span>5-7 мин чтения</span>
                  </div>
                  <div className="flex items-center gap-2">
                    <ShieldAlert className="h-5 w-5 text-purple-600" />
                    <span>Проверено врачом</span>
                  </div>
                </div>

                <div className="prose prose-lg max-w-none prose-slate prose-headings:font-black prose-headings:text-slate-900 prose-p:text-slate-600 prose-p:leading-relaxed prose-strong:text-slate-900 prose-li:text-slate-600">
                  {article.content.map((p, i) => (
                    <p key={i} className={i === 0 ? "text-xl md:text-2xl font-black text-slate-800 leading-relaxed mb-12 border-l-8 border-purple-600 pl-10 py-2" : "mb-8 text-lg font-medium leading-loose"}>
                      {p}
                    </p>
                  ))}
                </div>

                {/* Shared Side CTA Block */}
                <div className="mt-20 bg-purple-700 rounded-[3rem] p-12 text-white relative overflow-hidden shadow-2xl">
                  <div className="absolute top-0 right-0 p-12 opacity-[0.1] pointer-events-none">
                    <Heart className="w-64 h-64 rotate-12 fill-current" />
                  </div>
                  <div className="relative z-10 text-center sm:text-left">
                    <h3 className="text-3xl font-black mb-6">Нужна экстренная консультация?</h3>
                    <p className="text-xl opacity-90 mb-10 max-w-2xl font-medium leading-relaxed">Наши специалисты работают круглосуточно. Мы поможем в самых сложных ситуациях, гарантируем анонимность и профессионализм.</p>
                    <div className="flex flex-col sm:flex-row gap-6">
                      <a href="tel:88612906619" className="btn bg-white text-purple-700 px-10 py-5 rounded-2xl font-black text-xl hover:scale-105 transition-transform shadow-xl">
                        <Phone className="w-6 h-6 mr-2" /> 8 (861) 290-66-19
                      </a>
                      <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="btn border-2 border-white text-white px-10 py-5 rounded-2xl font-black text-xl hover:bg-white/10 transition-colors">
                        Написать в WhatsApp
                      </a>
                    </div>
                  </div>
                </div>
              </motion.div>
            </article>

            {/* Sidebar */}
            <aside className="space-y-12">
              {/* Consultation Card */}
              <div className="bg-slate-900 rounded-[2.5rem] p-8 text-white relative overflow-hidden shadow-2xl">
                <div className="absolute top-0 right-0 p-4 opacity-20">
                  <Heart className="w-24 h-24 rotate-12 fill-white" />
                </div>
                <h3 className="text-2xl font-black mb-8 relative z-10 tracking-tighter">Связаться с врачом</h3>
                
                <div className="space-y-8 relative z-10">
                  <div className="group">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2">Звонок бесплатный</p>
                    <a href="tel:88612906619" className="text-2xl font-black text-white hover:text-purple-400 transition-colors flex items-center gap-3">
                      <Phone className="w-6 h-6 text-purple-500" /> 290-66-19
                    </a>
                  </div>

                  <div className="group">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-2">Мессенджеры</p>
                    <div className="flex flex-col gap-4">
                      <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-300 hover:text-white transition-colors flex items-center gap-3">
                        <MessageSquare className="w-6 h-6 text-[#25D366]" /> WhatsApp
                      </a>
                      <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-300 hover:text-white transition-colors flex items-center gap-3">
                        <Send className="w-6 h-6 text-[#229ED9]" /> Telegram
                      </a>
                    </div>
                  </div>
                </div>

                <div className="mt-10 pt-10 border-t border-white/10 relative z-10">
                  <Button size="lg" className="w-full rounded-2xl font-black bg-purple-600 hover:bg-purple-700 text-white h-16 shadow-xl active:scale-95" asChild>
                    <a href="tel:88612906619">
                      Вызвать помощь
                    </a>
                  </Button>
                </div>
              </div>

              {/* Related Articles */}
              {relatedArticles.length > 0 && (
                <div className="space-y-8">
                  <h4 className="text-xl font-black text-slate-900 flex items-center gap-3">
                    <Activity className="w-6 h-6 text-purple-600" /> Читайте также
                  </h4>
                  <div className="space-y-6">
                    {relatedArticles.map((rel) => (
                      <Link key={rel.slug} href={`/articles/${rel.slug}`} className="group block">
                        <div className="bg-slate-50 p-8 rounded-[2rem] border-2 border-transparent hover:border-purple-100 hover:bg-white hover:shadow-2xl transition-all">
                          <h5 className="font-black text-slate-900 group-hover:text-purple-700 transition-colors leading-tight mb-3">
                            {rel.title}
                          </h5>
                          <p className="text-sm text-slate-500 line-clamp-2 leading-relaxed font-medium">
                            {rel.excerpt}
                          </p>
                        </div>
                      </Link>
                    ))}
                  </div>
                </div>
              )}
            </aside>
          </div>
        </div>
      </main>

      <footer className="border-t py-24 bg-slate-50 relative z-10">
        <div className="container mx-auto px-4 lg:px-8">
          <div className="grid md:grid-cols-3 gap-16 items-center text-center md:text-left">
            <div className="space-y-8">
              <Link href="/" className="flex items-center gap-3 justify-center md:justify-start">
                <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-600 text-white shadow-lg shadow-purple-200">
                  <Heart className="h-7 w-7 fill-current" />
                </div>
                <span className="text-2xl font-black text-purple-700 tracking-tighter uppercase">Extramed-Psy</span>
              </Link>
              <p className="text-slate-500 text-lg max-w-xs mx-auto md:mx-0 leading-relaxed font-bold">
                Профессиональная забота о вашем душевном и физическом здоровье в Краснодаре.
              </p>
            </div>
            <div className="flex flex-col gap-6 items-center">
              <h4 className="font-black text-slate-900 uppercase tracking-[0.2em] text-xs mb-2 opacity-50">Навигация</h4>
              <Link href="/" className="text-lg font-bold text-slate-600 hover:text-purple-600 transition-colors">Главная</Link>
              <Link href="/articles" className="text-lg font-bold text-slate-600 hover:text-purple-600 transition-colors">База знаний</Link>
              <Link href="/#prices" className="text-lg font-bold text-slate-600 hover:text-purple-600 transition-colors">Цены</Link>
            </div>
            <div className="space-y-8 text-center md:text-right">
              <h4 className="font-black text-slate-900 uppercase tracking-[0.2em] text-xs mb-2 opacity-50">Срочная помощь</h4>
              <div className="flex flex-col gap-4">
                <a href="tel:88612906619" className="text-3xl font-black text-purple-700 hover:opacity-80 transition-opacity tracking-tight">8 (861) 290-66-19</a>
                <p className="text-sm font-bold text-slate-400 uppercase tracking-widest">Круглосуточно 24/7</p>
              </div>
            </div>
          </div>
          <div className="mt-24 pt-10 border-t border-slate-200 flex flex-col md:flex-row justify-between items-center gap-6">
            <p className="text-slate-400 text-sm font-bold">
              © 2024 Extramed-Psy. Все права защищены.
            </p>
            <div className="flex gap-10">
              <Link href="#" className="text-slate-400 hover:text-purple-600 transition-colors font-bold text-sm">Политика конфиденциальности</Link>
              <Link href="#" className="text-slate-400 hover:text-purple-600 transition-colors font-bold text-sm">Лицензии</Link>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
