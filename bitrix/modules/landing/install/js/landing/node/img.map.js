{"version":3,"sources":["img.js"],"names":["BX","namespace","attr","Landing","Utils","data","encodeDataValue","decodeDataValue","Block","Node","Img","options","apply","this","arguments","editPanel","lastValue","field","uploadParams","isGrouped","node","addEventListener","onClick","bind","isAllowInlineEdit","setAttribute","message","isBackground","nodeName","isImage","isIcon","getBackgroundUrl","style","getAttribute","res","split","match","replace","getBackgroundUrl2x","getFileId","fileId","parseInt","dataset","fileid","getFileId2x","fileid2x","getAlt","alt","getPseudoUrl","url","getImageSrc","src","getImageSrc2x","setImageValue","value","newNode","create","attrs","data-fileid","id","parentNode","insertBefore","remove","srcset","src2x","id2x","setBackgroundValue","backgroundImage","join","removeProperty","prototype","__proto__","constructor","event","manifest","allowInlineEdit","Main","getInstance","isControlsEnabled","Text","currentNode","isEditable","UI","Panel","StylePanel","isShown","preventDefault","stopPropagation","Button","FontAction","hideAll","ColorAction","Content","selector","title","className","appendFooterButton","BaseButton","text","save","hide","document","body","appendChild","layout","form","Form","BaseForm","name","addField","getField","clear","appendForm","show","EditorPanel","forms","fields","getValue","JSON","stringify","setValue","description","dimensions","width","maxWidth","minWidth","height","maxHeight","minHeight","disableLink","closest","Field","Image","content","disableAltField","requestAnimationFrame","adjustPreviewBackgroundSize","preventSave","preventHistory","decodeURIComponent","onChange","History","push","Entry","block","getBlock","command","undo","redo","type","href","target","enabled"],"mappings":"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","file":"img.map.js"}