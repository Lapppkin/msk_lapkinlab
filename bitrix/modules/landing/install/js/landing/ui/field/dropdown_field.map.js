{"version":3,"sources":["dropdown_field.js"],"names":["BX","namespace","setTextContent","Landing","Utils","escapeText","data","offsetTop","offsetLeft","bind","unbind","Menu","UI","Tool","Field","Dropdown","options","this","items","BaseField","apply","arguments","onChangeHandler","onChange","layout","classList","add","popup","input","addEventListener","onInputClick","document","onDocumentClick","top","type","isPlainObject","keys","Object","map","key","name","value","setValue","content","onMouseWheel","prototype","constructor","__proto__","event","stopPropagation","popupRoot","contains","popupWindow","popupContainer","id","Date","bindElement","item","text","onclick","onItemClick","events","onPopupClose","remove","parentElement","appendChild","style","position","isShown","close","show","menuContainer","maxHeight","contentContainer","overflowX","onMouseOver","onMouseLeave","rect","getBoundingClientRect","left","height","width","postfix","property","onValueChangeHandler","fireEvent","getValue","dataset","forEach","isChanged","mouseEvent","window","preventDefault","delta","Panel","Content","getDeltaFromEvent","scrollTop","requestAnimationFrame","y"],"mappings":"CAAC,WACA,aAEAA,GAAGC,UAAU,uBAEb,IAAIC,EAAiBF,GAAGG,QAAQC,MAAMF,eAEtC,IAAIG,EAAaL,GAAGG,QAAQC,MAAMC,WAClC,IAAIC,EAAON,GAAGG,QAAQC,MAAME,KAC5B,IAAIC,EAAYP,GAAGG,QAAQC,MAAMG,UACjC,IAAIC,EAAaR,GAAGG,QAAQC,MAAMI,WAClC,IAAIC,EAAOT,GAAGG,QAAQC,MAAMK,KAC5B,IAAIC,EAASV,GAAGG,QAAQC,MAAMM,OAE9B,IAAIC,EAAOX,GAAGG,QAAQS,GAAGC,KAAKF,KAS9BX,GAAGG,QAAQS,GAAGE,MAAMC,SAAW,SAASC,GAEvCC,KAAKC,MAAQ,UAAWF,GAAWA,EAAQE,MAAQF,EAAQE,SAC3DlB,GAAGG,QAAQS,GAAGE,MAAMK,UAAUC,MAAMH,KAAMI,WAC1CJ,KAAKK,uBAAyBN,EAAQO,WAAa,WAAaP,EAAQO,SAAW,aACnFN,KAAKO,OAAOC,UAAUC,IAAI,6BAC1BT,KAAKU,MAAQ,KACbV,KAAKW,MAAMC,iBAAiB,QAASZ,KAAKa,aAAarB,KAAKQ,OAC5Dc,SAASF,iBAAiB,QAASZ,KAAKe,gBAAgBvB,KAAKQ,OAC7DgB,IAAIF,SAASF,iBAAiB,QAASZ,KAAKe,gBAAgBvB,KAAKQ,OAEjE,GAAIjB,GAAGkC,KAAKC,cAAclB,KAAKC,OAC/B,CACC,IAAIkB,EAAOC,OAAOD,KAAKnB,KAAKC,OAC5BD,KAAKC,MAAQkB,EAAKE,IAAI,SAASC,GAC9B,OAAQC,KAAMvB,KAAKC,MAAMqB,GAAME,MAAOF,IACpCtB,MAGJf,EAAee,KAAKW,MAAOX,KAAKC,MAAM,GAAGsB,MACzClC,EAAKW,KAAKW,MAAO,QAASX,KAAKC,MAAM,GAAGuB,OAExCxB,KAAKyB,SAASzB,KAAK0B,SACnB1B,KAAK2B,aAAe3B,KAAK2B,aAAanC,KAAKQ,OAG5CjB,GAAGG,QAAQS,GAAGE,MAAMC,SAAS8B,WAC5BC,YAAa9C,GAAGG,QAAQS,GAAGE,MAAMC,SACjCgC,UAAW/C,GAAGG,QAAQS,GAAGE,MAAMK,UAAU0B,UAEzCf,aAAc,SAASkB,GAEtBA,EAAMC,kBACN,IAAKhC,KAAKU,OAAUV,KAAKiC,YAAcjC,KAAKiC,UAAUC,SAASlC,KAAKU,MAAMyB,YAAYC,gBACtF,CACCpC,KAAKU,MAAQ,IAAIhB,GAChB2C,GAAI,cAAgB,IAAIC,KACxBC,YAAavC,KAAKW,MAClBV,MAAOD,KAAKC,MAAMoB,IAAI,SAASmB,GAC9B,OACCC,KAAMrD,EAAWoD,EAAKjB,MACtBmB,QAAS,WACR1C,KAAK2C,YAAYH,IAChBhD,KAAKQ,QAENA,MACH4C,QACCC,aAAc,WACb7C,KAAKW,MAAMH,UAAUsC,OAAO,qBAC5B9C,KAAKO,OAAOC,UAAUsC,OAAO,sBAC5BtD,KAAKQ,SAITA,KAAKiC,UAAYjC,KAAKO,OAAOwC,cAAcA,cAAcA,cACzD/C,KAAKiC,UAAUe,YAAYhD,KAAKU,MAAMyB,YAAYC,gBAClDpC,KAAKiC,UAAUgB,MAAMC,SAAW,WAGjClD,KAAKO,OAAOC,UAAUC,IAAI,qBAC1BT,KAAKW,MAAMH,UAAUC,IAAI,qBAEzB,GAAIT,KAAKU,MAAMyB,YAAYgB,UAC3B,CACCnD,KAAKU,MAAM0C,YAGZ,CACCpD,KAAKU,MAAM2C,OAGZrD,KAAKU,MAAMH,OAAO+C,cAAcL,MAAMM,UAAY,0BAClDvD,KAAKU,MAAMyB,YAAYqB,iBAAiBP,MAAMQ,UAAY,SAE1DjE,EAAKQ,KAAKU,MAAMyB,YAAYC,eAAgB,YAAapC,KAAK0D,YAAYlE,KAAKQ,OAC/ER,EAAKQ,KAAKU,MAAMyB,YAAYC,eAAgB,aAAcpC,KAAK2D,aAAanE,KAAKQ,OAEjF,IAAI4D,EAAO5D,KAAKW,MAAMkD,wBACtB,IAAIC,EAAOvE,EAAWS,KAAKW,MAAOX,KAAKiC,WACvC,IAAIjB,EAAM1B,EAAUU,KAAKW,MAAOX,KAAKiC,WACrCjC,KAAKU,MAAMyB,YAAYC,eAAea,MAAMjC,IAAMA,EAAM4C,EAAKG,OAAS,KACtE/D,KAAKU,MAAMyB,YAAYC,eAAea,MAAMa,KAAOA,EAAO,KAC1D9D,KAAKU,MAAMyB,YAAYC,eAAea,MAAMe,MAAQJ,EAAKI,MAAQ,MAIlErB,YAAa,SAASH,GAErBvD,EAAee,KAAKW,MAAO6B,EAAKjB,MAChClC,EAAKW,KAAKW,MAAO,QAAS6B,EAAKhB,OAC/BxB,KAAKU,MAAM0C,QACXpD,KAAKK,gBAAgBmC,EAAKhB,MAAOxB,KAAKC,MAAOD,KAAKiE,QAASjE,KAAKkE,UAChElE,KAAKmE,qBAAqBnE,MAC1BjB,GAAGqF,UAAUpE,KAAKW,MAAO,UAM1B0D,SAAU,WAET,cAAcrE,KAAKW,MAAM2D,QAAQ9C,QAAU,YAAcxB,KAAKW,MAAM2D,QAAQ9C,MAAQxB,KAAKC,MAAM,GAAGuB,OAGnGC,SAAU,SAASD,GAElBxB,KAAKW,MAAM2D,QAAQ9C,MAAQA,EAC3BxB,KAAKC,MAAMsE,QAAQ,SAAS/B,GAE3B,GAAIhB,GAASgB,EAAKhB,MAClB,CACCvC,EAAee,KAAKW,MAAO6B,EAAKjB,MAChClC,EAAKW,KAAKW,MAAO,QAAS6B,EAAKhB,SAE9BxB,OAQJwE,UAAW,WAGV,OAAOxE,KAAK0B,SAAW1B,KAAKqE,YAG7BtD,gBAAiB,WAEhB,GAAIf,KAAKU,MACT,CACCV,KAAKU,MAAM0C,UAObM,YAAa,WAEZ,IAAIe,EAAa,YAAaC,OAAS,QAAU,aACjDlF,EAAKQ,KAAKU,MAAMyB,YAAYC,eAAgBqC,EAAYzE,KAAK2B,cAC7DnC,EAAKQ,KAAKU,MAAMyB,YAAYC,eAAgB,YAAapC,KAAK2B,eAO/DgC,aAAc,WAEb,IAAIc,EAAa,YAAaC,OAAS,QAAU,aACjDjF,EAAOO,KAAKU,MAAMyB,YAAYC,eAAgBqC,EAAYzE,KAAK2B,cAC/DlC,EAAOO,KAAKU,MAAMyB,YAAYC,eAAgB,YAAapC,KAAK2B,eAQjEA,aAAc,SAASI,GAEtBA,EAAMC,kBACND,EAAM4C,iBAEN,IAAIC,EAAQ7F,GAAGG,QAAQS,GAAGkF,MAAMC,QAAQC,kBAAkBhD,GAC1D,IAAIiD,EAAYhF,KAAKU,MAAMyB,YAAYqB,iBAAiBwB,UAExDC,sBAAsB,WACrBjF,KAAKU,MAAMyB,YAAYqB,iBAAiBwB,UAAYA,EAAYJ,EAAMM,GACrE1F,KAAKQ,UAnMT","file":"dropdown_field.map.js"}