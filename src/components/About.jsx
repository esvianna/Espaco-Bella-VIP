import React from 'react';
import { Sparkles, Heart, Coffee } from 'lucide-react';

const About = () => {
  return (
    <section id="sobre" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          
          {/* Image Grid */}
          <div className="grid grid-cols-2 gap-4">
            <img 
              src="https://images.unsplash.com/photo-1522337660859-02fbefca4702?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
              alt="Detalhe de produtos e ambiente" 
              className="w-full h-64 object-cover rounded-2xl rounded-tr-[4rem]"
            />
            <img 
              src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
              alt="Cliente relaxando" 
              className="w-full h-64 object-cover rounded-2xl rounded-bl-[4rem] mt-8"
            />
          </div>

          {/* Content */}
          <div>
            <h2 className="text-3xl md:text-4xl font-serif text-bella-text mb-6">
              Um espaço pensado para cuidar de você
            </h2>
            <p className="text-lg text-bella-subtext mb-8 leading-relaxed">
              No Espaço Bella VIP, cada atendimento é feito com atenção, carinho e cuidado aos detalhes. Oferecemos serviços de cabelo, Gloss Express, massagens e cuidados de beleza para mulheres que desejam se sentir bem, bonitas e confiantes.
            </p>
            
            <div className="space-y-6">
              <div className="flex items-start">
                <div className="flex-shrink-0 mt-1">
                  <div className="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                    <Sparkles size={20} />
                  </div>
                </div>
                <div className="ml-4">
                  <h3 className="text-lg font-medium text-bella-text">Profissionais Especializadas</h3>
                  <p className="mt-1 text-bella-subtext">Equipe treinada para entender e realçar a sua beleza natural.</p>
                </div>
              </div>
              
              <div className="flex items-start">
                <div className="flex-shrink-0 mt-1">
                  <div className="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                    <Coffee size={20} />
                  </div>
                </div>
                <div className="ml-4">
                  <h3 className="text-lg font-medium text-bella-text">Ambiente Acolhedor</h3>
                  <p className="mt-1 text-bella-subtext">Um momento só seu. Tome um café, relaxe e esqueça a pressa do dia a dia.</p>
                </div>
              </div>

              <div className="flex items-start">
                <div className="flex-shrink-0 mt-1">
                  <div className="w-10 h-10 rounded-full bg-bella-nude flex items-center justify-center text-bella-terracotta">
                    <Heart size={20} />
                  </div>
                </div>
                <div className="ml-4">
                  <h3 className="text-lg font-medium text-bella-text">Produtos Premium</h3>
                  <p className="mt-1 text-bella-subtext">Trabalhamos apenas com marcas renomadas para garantir a saúde dos seus fios e pele.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
