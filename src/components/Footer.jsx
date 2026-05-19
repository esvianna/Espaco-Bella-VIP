import React from 'react';


const Footer = () => {
  return (
    <footer className="bg-bella-nude/50 pt-16 pb-8 border-t border-bella-rose/20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid md:grid-cols-3 gap-12 mb-12 text-center md:text-left">
          
          <div>
            <a href="#" className="font-serif text-2xl font-bold text-bella-text tracking-wide mb-4 inline-block">
              Bella VIP
            </a>
            <p className="text-bella-subtext">
              Cuidado, beleza e bem-estar para mulheres no coração do Campo Comprido.
            </p>
          </div>

          <div>
            <h4 className="font-serif text-lg text-bella-text mb-4">Contato</h4>
            <p className="text-bella-subtext mb-2">WhatsApp: (41) 99999-9999</p>
            <p className="text-bella-subtext mb-4">R. Eduardo Sprada, 0000 - Curitiba</p>
            <div className="flex justify-center md:justify-start space-x-4 text-bella-terracotta">
              <a href="#" className="hover:text-[#c27a5d] transition-colors font-medium">Instagram</a>
              <a href="#" className="hover:text-[#c27a5d] transition-colors font-medium">Facebook</a>
            </div>
          </div>

          <div>
            <h4 className="font-serif text-lg text-bella-text mb-4">Pronta para cuidar de você?</h4>
            <p className="text-bella-subtext mb-4">
              Fale conosco pelo WhatsApp e encontre o melhor horário para seu atendimento.
            </p>
            <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" className="btn-primary w-full md:w-auto">
              Agendar atendimento
            </a>
          </div>

        </div>

        <div className="pt-8 border-t border-bella-rose/20 text-center text-sm text-bella-subtext flex flex-col md:flex-row justify-between items-center">
          <p>&copy; {new Date().getFullYear()} Espaço Bella VIP. Todos os direitos reservados.</p>
          <p className="mt-2 md:mt-0">Desenvolvido com carinho para Campo Comprido.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
