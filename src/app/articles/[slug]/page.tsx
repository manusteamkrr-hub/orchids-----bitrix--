"use client";

import React, { useMemo } from "react";
import Link from "next/link";
import { useParams, useRouter } from "next/navigation";
import { 
  Heart, ArrowLeft, Phone, Calendar, User, 
  Share2, Clock, CheckCircle2, Sparkles,
  ChevronRight, Brain, Activity, Users, ShieldAlert,
  MessageSquare, Send, Mail, Menu
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
import { articles } from "@/lib/articles-data";
import { motion, useScroll, useSpring } from "framer-motion";

export default function ArticlePage() {
  const { slug } = useParams();
  const router = useRouter();
  const article = articles.find((a) => a.slug === slug);
  const { scrollYProgress } = useScroll();
  const scaleX = useSpring(scrollYProgress, {
    stiffness: 100,
    damping: 30,
    restDelta: 0.001
  });

  const relatedArticles = useMemo(() => {
    if (!article) return [];
    return articles
      .filter(a => a.slug !== article.slug && (a.category === article.category || !article.category))
      .slice(0, 3);
  }, [article]);

  if (!article) {
    return (
      <div className="flex flex-col items-center justify-center min-h-screen p-4 bg-[#fafafa]">
        <motion.div 
          initial={{ opacity: 0, scale: 0.9 }}
          animate={{ opacity: 1, scale: 1 }}
          className="text-center"
        >
          <div className="w-24 h-24 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <Heart className="w-12 h-12 text-primary" />
          </div>
          <h1 className="text-3xl font-black text-slate-900 mb-4">Материал не найден</h1>
          <p className="text-slate-500 mb-8 max-w-xs mx-auto">К сожалению, запрашиваемая статья была перемещена или удалена.</p>
          <Button size="lg" className="rounded-2xl px-8" onClick={() => router.push("/articles")}>Вернуться в каталог</Button>
        </motion.div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-white selection:bg-primary/20">
      {/* Reading Progress Bar */}
      <motion.div
        className="fixed top-0 left-0 right-0 h-1 bg-primary z-[60] origin-left"
        style={{ scaleX }}
      />

      {/* Header */}
      <header className="fixed top-0 z-50 w-full border-b bg-white/70 backdrop-blur-xl">
        <div className="container mx-auto flex h-20 items-center justify-between px-4 lg:px-8">
          <Link href="/" className="flex items-center gap-3 group transition-transform active:scale-95">
            <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
              <Heart className="h-6 w-6 fill-current" />
            </div>
            <span className="text-xl font-black tracking-tight text-primary leading-tight hidden sm:block">Extramed-Psy</span>
          </Link>
          <nav className="hidden md:flex items-center gap-8 mr-auto ml-12">
            <Link href="/" className="text-sm font-bold text-muted-foreground hover:text-primary transition-colors">Главная</Link>
            <Link href="/articles" className="text-sm font-bold text-muted-foreground hover:text-primary transition-colors">Статьи</Link>
          </nav>
            <div className="flex items-center gap-4">
              <Button className="hidden sm:flex rounded-2xl font-bold px-6 shadow-xl shadow-primary/20" asChild>
                <a href="tel:88612906619">
                  <Phone className="mr-2 h-4 w-4" />
                  8 (861) 290-66-19
                </a>
              </Button>

              <Sheet>
                <SheetTrigger asChild>
                  <Button variant="ghost" size="icon" className="md:hidden">
                    <Menu className="h-6 w-6 text-primary" />
                  </Button>
                </SheetTrigger>
                <SheetContent side="right" className="w-[300px]">
                  <SheetHeader>
                    <SheetTitle className="text-left text-primary font-bold">Меню</SheetTitle>
                  </SheetHeader>
                  <nav className="mt-8 flex flex-col gap-4">
                    <Link href="/" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">Главная</Link>
                    <Link href="/articles" className="text-lg font-bold text-primary hover:text-primary/80 transition-colors py-3 border-b">Статьи</Link>
                    <div className="mt-4 pt-4">
                      <p className="text-sm text-muted-foreground mb-4">Свяжитесь с нами:</p>
                      <div className="flex flex-col gap-3">
                        <Button className="w-full justify-start bg-primary text-primary-foreground font-bold py-6" asChild>
                          <a href="tel:88612906619">
                            <Phone className="mr-2 h-5 w-5" />
                            8 (861) 290-66-19
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-bold py-6" asChild>
                          <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
                            <MessageSquare className="mr-2 h-5 w-5" />
                            WhatsApp
                          </a>
                        </Button>
                        <Button variant="outline" className="w-full justify-start border-[#229ED9] text-[#229ED9] hover:bg-[#229ED9] hover:text-white font-bold py-6" asChild>
                          <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer">
                            <Send className="mr-2 h-5 w-5" />
                            Telegram
                          </a>
                        </Button>
                      </div>
                    </div>
                  </nav>
                </SheetContent>
              </Sheet>
            </div>
        </div>
      </header>

      <main className="pt-32 pb-32">
        <div className="container mx-auto px-4 lg:px-8">
          <div className="max-w-7xl mx-auto grid lg:grid-cols-[1fr_350px] gap-16">
            
            {/* Article Content */}
            <article>
              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.6 }}
              >
                {/* Breadcrumbs */}
                <div className="flex items-center gap-2 text-xs font-bold text-slate-400 uppercase tracking-widest mb-8">
                  <Link href="/articles" className="hover:text-primary transition-colors">База знаний</Link>
                  <ChevronRight className="w-3 h-3" />
                  <span className="text-slate-900 truncate max-w-[200px]">{article.title}</span>
                </div>

                <Badge className="mb-6 bg-primary/10 text-primary border-none px-4 py-1.5 rounded-lg font-bold text-xs uppercase tracking-widest">
                  <Sparkles className="w-3 h-3 mr-2 fill-current" /> Экспертный материал
                </Badge>
                
                <h1 className="text-4xl md:text-6xl font-black text-slate-900 mb-8 leading-[1.1] tracking-tight">
                  {article.title}
                </h1>

                <div className="flex flex-wrap items-center gap-8 mb-12 text-sm font-bold text-slate-500 border-y border-slate-100 py-6">
                  <div className="flex items-center gap-3">
                    <div className="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                      <User className="w-5 h-5" />
                    </div>
                    <div>
                      <p className="text-slate-900 leading-none mb-1">Медицинский совет</p>
                      <p className="text-xs font-medium opacity-70">Клиника Extramed-Psy</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-2">
                    <Calendar className="h-4 w-4 text-primary" />
                    <span>2024</span>
                  </div>
                  <div className="flex items-center gap-2">
                    <Clock className="h-4 w-4 text-primary" />
                    <span>6 мин чтения</span>
                  </div>
                </div>

                <div className="prose prose-lg max-w-none prose-slate prose-headings:font-black prose-headings:text-slate-900 prose-p:text-slate-600 prose-p:leading-relaxed prose-strong:text-slate-900 prose-li:text-slate-600">
                  {article.content.map((p, i) => (
                    <p key={i} className={i === 0 ? "text-xl md:text-2xl font-bold text-slate-800 leading-relaxed mb-12 border-l-4 border-primary pl-8 py-2" : "mb-6"}>
                      {p}
                    </p>
                  ))}
                </div>

                {/* Article Footer */}
                <div className="mt-20 pt-12 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-8">
                  <div className="flex items-center gap-4">
                    <Button variant="outline" className="rounded-2xl gap-2 font-bold border-slate-200">
                      <Share2 className="w-4 h-4" /> Поделиться
                    </Button>
                  </div>
                  <div className="flex items-center gap-2 text-sm font-bold text-slate-400">
                    <CheckCircle2 className="w-5 h-5 text-primary" />
                    Статья проверена врачом-гериатром
                  </div>
                </div>
              </motion.div>
            </article>

            {/* Sidebar */}
            <aside className="space-y-12">
              {/* Consultation Card */}
              <div className="bg-slate-900 rounded-[2rem] p-8 text-white relative overflow-hidden shadow-2xl">
                <div className="absolute top-0 right-0 p-4 opacity-20">
                  <Heart className="w-24 h-24 rotate-12 fill-white" />
                </div>
                <h3 className="text-2xl font-black mb-6 relative z-10 leading-tight">Нужна помощь эксперта?</h3>
                
                <div className="space-y-6 relative z-10">
                  <div className="group">
                    <p className="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">Телефон клиники</p>
                    <a href="tel:88612906619" className="text-xl font-black text-white hover:text-primary transition-colors flex items-center gap-2">
                      <Phone className="w-5 h-5 text-primary" /> 8 (861) 290-66-19
                    </a>
                  </div>

                  <div className="group">
                    <p className="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">WhatsApp</p>
                    <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-300 hover:text-white transition-colors flex items-center gap-2">
                      <MessageSquare className="w-5 h-5 text-[#25D366]" /> +7 (928) 257-91-15
                    </a>
                  </div>

                  <div className="group">
                    <p className="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">Telegram</p>
                    <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-300 hover:text-white transition-colors flex items-center gap-2">
                      <Send className="w-5 h-5 text-[#229ED9]" /> @ExtraMed93
                    </a>
                  </div>
                </div>

                <div className="mt-8 pt-8 border-t border-white/10 relative z-10">
                  <Button size="lg" className="w-full rounded-2xl font-bold bg-primary hover:bg-primary/90 text-white h-14 shadow-lg shadow-primary/20" asChild>
                    <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
                      Написать нам
                    </a>
                  </Button>
                </div>
              </div>

              {/* Related Articles */}
              {relatedArticles.length > 0 && (
                <div className="space-y-6">
                  <h4 className="text-lg font-black text-slate-900 flex items-center gap-2">
                    <Activity className="w-5 h-5 text-primary" /> Похожие материалы
                  </h4>
                  <div className="space-y-4">
                    {relatedArticles.map((rel) => (
                      <Link key={rel.slug} href={`/articles/${rel.slug}`} className="group block">
                        <div className="bg-slate-50 p-6 rounded-2xl border border-transparent hover:border-primary/20 hover:bg-white hover:shadow-xl transition-all">
                          <h5 className="font-bold text-slate-900 group-hover:text-primary transition-colors leading-snug mb-2">
                            {rel.title}
                          </h5>
                          <p className="text-xs text-slate-500 line-clamp-2 leading-relaxed">
                            {rel.excerpt}
                          </p>
                        </div>
                      </Link>
                    ))}
                  </div>
                </div>
              )}

              {/* Quick Navigation */}
              <div className="bg-primary/5 rounded-[2rem] p-8">
                <h4 className="text-lg font-black text-slate-900 mb-6 flex items-center gap-2">
                  <Brain className="w-5 h-5 text-primary" /> По темам
                </h4>
                <div className="flex flex-col gap-2">
                  <Link href="/articles" className="flex items-center justify-between group p-2 hover:bg-white rounded-xl transition-all">
                    <span className="text-sm font-bold text-slate-600 group-hover:text-primary transition-colors flex items-center gap-2">
                      <Users className="w-4 h-4 opacity-50" /> Пожилым
                    </span>
                    <ChevronRight className="w-4 h-4 text-slate-300 group-hover:translate-x-1 transition-transform" />
                  </Link>
                  <Link href="/articles" className="flex items-center justify-between group p-2 hover:bg-white rounded-xl transition-all">
                    <span className="text-sm font-bold text-slate-600 group-hover:text-primary transition-colors flex items-center gap-2">
                      <Brain className="w-4 h-4 opacity-50" /> Психиатрия
                    </span>
                    <ChevronRight className="w-4 h-4 text-slate-300 group-hover:translate-x-1 transition-transform" />
                  </Link>
                  <Link href="/articles" className="flex items-center justify-between group p-2 hover:bg-white rounded-xl transition-all">
                    <span className="text-sm font-bold text-slate-600 group-hover:text-primary transition-colors flex items-center gap-2">
                      <ShieldAlert className="w-4 h-4 opacity-50" /> Экстренно
                    </span>
                    <ChevronRight className="w-4 h-4 text-slate-300 group-hover:translate-x-1 transition-transform" />
                  </Link>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </main>

      <footer className="border-t py-24 bg-white relative z-10">
        <div className="container mx-auto px-4 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12 items-center text-center md:text-left">
            <div className="space-y-6">
              <Link href="/" className="flex items-center gap-3 justify-center md:justify-start">
                <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
                  <Heart className="h-6 w-6 fill-current" />
                </div>
                <span className="text-xl font-black text-primary">Extramed-Psy</span>
              </Link>
              <p className="text-slate-500 text-sm max-w-xs mx-auto md:mx-0 leading-relaxed">
                Профессиональная медицинская помощь и заботливый уход за вашими близкими в Краснодаре.
              </p>
            </div>
            <div className="flex flex-col gap-4 items-center">
              <h4 className="font-bold text-slate-900 uppercase tracking-widest text-xs mb-2">Навигация</h4>
              <Link href="/" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Главная</Link>
              <Link href="/articles" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Все статьи</Link>
              <Link href="/#pricing" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Цены</Link>
            </div>
            <div className="space-y-6 text-center md:text-right">
              <h4 className="font-bold text-slate-900 uppercase tracking-widest text-xs mb-2">Контакты</h4>
              <div className="flex flex-col gap-3">
                <a href="tel:88612906619" className="text-2xl font-black text-primary hover:opacity-80 transition-opacity tracking-tight">8 (861) 290-66-19</a>
                <p className="text-xs font-bold text-slate-400 uppercase tracking-widest">Телефон клиники</p>
              </div>
              
              <div className="pt-4 space-y-4">
                <div className="flex flex-col gap-1">
                  <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <MessageSquare className="w-5 h-5 text-[#25D366]" /> +7 (928) 257-91-15
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">WhatsApp консультации</p>
                </div>

                <div className="flex flex-col gap-1">
                  <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <Send className="w-5 h-5 text-[#229ED9]" /> @ExtraMed93
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Telegram канал</p>
                </div>

                <div className="flex flex-col gap-1">
                  <a href="mailto:alexsamara134@yandex.ru" className="text-sm font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <Mail className="w-4 h-4 text-primary" /> alexsamara134@yandex.ru
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Электронная почта</p>
                </div>
              </div>
            </div>
          </div>
          <div className="mt-20 pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p className="text-slate-400 text-xs font-medium">
              © 2024 Extramed-Psy. Все права защищены.
            </p>
            <div className="flex gap-6">
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><Users className="w-5 h-5" /></Link>
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><Activity className="w-5 h-5" /></Link>
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><ShieldAlert className="w-5 h-5" /></Link>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
