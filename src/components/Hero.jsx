import React from 'react';
import { MessageCircle } from 'lucide-react';

const Hero = () => {
  return (
    <section className="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
      {/* Background with delicate gradient/pattern */}
      <div className="absolute inset-0 bg-bella-nude opacity-40 z-0"></div>
      <div className="absolute right-0 top-0 w-1/2 h-full bg-bella-rose opacity-10 rounded-l-full blur-3xl transform translate-x-1/3 -translate-y-1/4"></div>
      
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          
          {/* Text Content */}
          <div className="max-w-2xl">
            <span className="inline-block py-1 px-3 rounded-full bg-white text-bella-terracotta text-sm font-medium mb-6 shadow-sm border border-bella-rose/30">
              Campo Comprido, Curitiba
            </span>
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-serif text-bella-text leading-tight mb-6">
              Cabelo, beleza e <br />
              <span className="text-bella-terracotta italic">bem-estar</span>
            </h1>
            <p className="text-lg md:text-xl text-bella-subtext mb-8 leading-relaxed max-w-lg">
              Atendimento feminino e personalizado para quem deseja cuidar dos cabelos, relaxar e realçar a autoestima em um ambiente acolhedor.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4">
              <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" className="btn-primary group">
                <MessageCircle className="mr-2 h-5 w-5 group-hover:scale-110 transition-transform" />
                Agendar pelo WhatsApp
              </a>
              <a href="#servicos" className="btn-secondary">
                Conhecer serviços
              </a>
            </div>
          </div>

          {/* Image */}
          <div className="relative mt-10 lg:mt-0">
            <div className="absolute inset-0 bg-bella-terracotta rounded-t-full rounded-b-3xl transform rotate-3 scale-105 opacity-10 z-0"></div>
            <div className="relative rounded-t-full rounded-b-3xl overflow-hidden shadow-2xl z-10 border-8 border-white">
              <img 
                src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                alt="Mulher sorrindo em salão de beleza" 
                className="w-full h-auto object-cover aspect-[4/5]"
              />
            </div>
            {/* Decorative element */}
            <div className="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg z-20 flex items-center gap-3">
              <div className="flex -space-x-2">
                {[1, 2, 3].map((i) => (
                  <img key={i} className="inline-block h-8 w-8 rounded-full ring-2 ring-white object-cover" src={`https://i.pravatar.cc/100?img=${i+10}`} alt=""/>
                ))}
              </div>
              <p className="text-xs font-medium text-bella-text"><span className="text-bella-terracotta font-bold">+500</span> mulheres<br/>atendidas</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  );
};

export default Hero;
